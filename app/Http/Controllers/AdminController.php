<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
      $category = new Category;
      $category->category_name = $request->category;
      $category->save();
      toastr()->closeButton()->timeOut(10000)->success('Category Added Successfuly...');
      return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        toastr() ->closeButton()->timeOut(10000)->success('Category Deleted Successfuly...');
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);
        $data->category_name = $request->category;
        $data->save();
        toastr() ->closeButton()->timeOut(10000)->success('Category Edited Successfuly...');
        return redirect('/view_category');
    }

   public function add_product()
    {
        $category = Category::all();
        return view('admin.product.add_product',compact('category'));
    }

    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->category = $request->category;
        $data->quantity = $request->qty;
        $image = $request->image;

    if($image)
    {
$imagename=time().'.'.$image->getClientOriginalExtension();
$request->image->move('product',$imagename);
$data->images =$imagename;
    }
        $data->save();
        toastr() ->closeButton()->timeOut(10000)->success('New Product Added Successfuly...');
        return redirect()->back();

    }


    public function view_product()
    {
        $product = Product::paginate(10);

        return view('admin.product.view_product',compact('product'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $image_path = public_path('product/'.$data->images);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $data->delete();
        toastr() ->closeButton()->timeOut(10000)->success('Category Deleted Successfuly...');
        return redirect()->back();
    }

    public function update_product($id)
{
    $data = Product::find($id);
    $category = Category::all();
    return view('admin.product.update_product', compact('data', 'category'));
}

public function edit_product(Request $request, $id)
{
    $data = Product::find($id);

    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'qty' => 'required|integer',
        'category' => 'required|string',
        'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation for the image
    ]);

    // Update product details
    $data->title = $request->title;
    $data->description = $request->description;
    $data->price = $request->price;
    $data->category = $request->category;
    $data->quantity = $request->qty;

    // Check if a new image is uploaded
    if ($request->hasFile('images')) {
        // Delete the old image if exists
        if (file_exists(public_path('product/' . $data->images))) {
            unlink(public_path('product/' . $data->images));
        }

        // Store the new image
        $image = $request->file('images');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('product'), $imagename);
        $data->images = $imagename; // Update the images field
    }

    // Save the updated product
    $data->save();

    // Show a success message
    toastr()->closeButton()->timeOut(10000)->success('Product updated successfully...');
    return redirect('/view_product');
}

    public function product_search(Request $request)
    {
        $search = $request->search;
        $product =Product::where('title','LIKE','%'.$search.'%')->paginate(10);
        return view('admin.product.view_product',compact('product')); 
    }

}
