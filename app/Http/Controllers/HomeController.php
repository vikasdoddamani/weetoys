<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $count = Auth::check() ? Cart::where('user_id', Auth::id())->count() : 0; // Default to 0
        return view('admin.index', compact('count'));
    }


    public function home()
    {
        $product = Product::paginate(12);
        $count = Auth::check() ? Cart::where('user_id', Auth::id())->count() : 0; // Default to 0
        $vehicleAccessories = Product::where('category', 'accessories')->paginate(12);
        $vehicle = Product::where('category', 'vehicle')->paginate(12);
        return view('home.index', compact('product', 'count','vehicleAccessories','vehicle'));
    }

    public function login_home()
    {
        $product = Product::all();
        $user = Auth::user();

        $count = $user ? Cart::where('user_id', $user->id)->count() : 0; // Default to 0

        return view('home.index', compact('product', 'count'));
    }



    public function product_details($id)
    {
        $data= Product::find($id);
        return view('home.product_details',compact('data'));
    }

    public function add_cart($id)
    {
        $product_id=$id;
        $user=Auth::user();
        $user_id = $user->id;
        $data = new Cart;
        $data->user_id=$user_id;
        $data->product_id=$product_id;
        $data->save();
        toastr()->closeButton()->timeOut(50000)->success('Product Added to Cart');
        return redirect()->back();
    }


    public function mycart()
    {
        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id', $userid)->count();
            $cart = Cart::where('user_id', $userid)->get();
        } else {
            $count = 0;
            $cart = [];
        }
        return view('home.mycart', compact('count', 'cart'));
    }


    public function remove_cart(Request $request, $id)
{
    $cartItem = Cart::find($id);

    if ($cartItem) {
        $cartItem->delete();
        toastr() ->closeButton()->timeOut(10000)->success('Product Removed Successfuly...');
        return redirect()->back();
    }

    return redirect('/')->with('error', 'Item not found in cart.');
}

public function checkout(Request $request)
{
    $authUserId = Auth::id();
    $requestUserId = $request->input('user_id');

    // $order = new Order;
    // $order->


    if ($authUserId !== (int)$requestUserId) {
        toastr()->closeButton()->timeOut(10000)->warning('Don’t try to change user data, account will be blocked on the next attempt');
        return redirect()->back();
    }

    $cartItems = Cart::where('user_id', $authUserId)->get();
    $totalAmount = $cartItems->sum(function ($item) {
        return $item->product->price;
    });
    return view('home.checkout', compact('authUserId', 'totalAmount'));
}


public function process_order()
{
    return view('home.thankyou');
}

}
