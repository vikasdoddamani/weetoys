<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Endroid\QrCode\QrCode; // Import QrCode class
use Endroid\QrCode\Writer\PngWriter; // Import PngWriter class

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


public function process_order(Request $request, $id)
{
    $authUserId = Auth::id();

    $cartItems = Cart::where('user_id', $authUserId)->get();

    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('error', 'Your cart is empty.');
    }

    DB::transaction(function () use ($cartItems, $request, $authUserId) {
        $payment='cod';
        foreach ($cartItems as $cartItem) {
            $order = new Order;
            $order->name = $request->name;
            $order->rec_address = $request->address;
            $order->phone = $request->phone;
            $order->payments = $payment;
            $order->payment_status = $request->payment_status;
            $order->user_id = $authUserId;
            $order->product_id = $cartItem->product_id;
            $order->save();
        }
        Cart::where('user_id', $authUserId)->delete();
    });

    return view('home.thankyou');
}


public function showByCategory($category)
{
    $products = Product::where('category', $category)->get();
    $user = Auth::user();
    $count = $user ? Cart::where('user_id', $user->id)->count() : 0;

    return view('home.all_product', compact('products', 'count'));
}

public function category_by_products(Request $request)
{
    $user = Auth::user();
    $category = $request->query('category');
    $products = $category ? Product::where('category', $category)->get() : Product::all();
    $count = $user ? Cart::where('user_id', $user->id)->count() : 0;
    return view('home.all_product', compact('products', 'count'));
}

public function usermyorder()
{
    if (Auth::id()) {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
        $cart = Order::where('user_id', $userid)->get();
    } else {
        $count = 0;
        $cart = [];
    }
        return view('home.my_order', compact('count', 'cart'));
}
public function showPaymentForm(Request $request)
{
    $amount = $request->input('amount'); // Get the amount from the session or request
    $upiId = 'vikasdoddamani1233@axl'; // Replace with your actual UPI ID

    // Generate the UPI payment string
    $upiString = "upi://pay?pa={$upiId}&pn=vikas&mc=0000&mode=02&purpose=00&tid=TransactionId&tt=TransactionTitle&am={$amount}&cu=INR&url=https://weetoys.in";

    // Generate QR code
    $qrCode = new QrCode($upiString);
    $writer = new PngWriter();
    $result = $writer->write($qrCode);

    // Get the QR code image as a base64 string
    $qrCodeDataUri = $result->getDataUri();

    return view('payment.integration', compact('qrCodeDataUri', 'amount'));
}


}
