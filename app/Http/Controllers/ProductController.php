<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('frontend/product',['products'=>$data]);
    }
    public function details($id)
    {
        $data =  Product::find($id);
        return view('frontend/details',['product'=>$data]);

    }
    public function search(Request $request)
    {
        $data = Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('frontend/search', ['products'=>$data]);
    }
    public function addToCart(Request $request)
    {
        if ($request->session()->has('user')) {

            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')['id'];
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/cartlist');
        } else {
            return redirect('/login');
        }
    }
    static function CartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    public function cartlist()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
                    ->join('products', 'cart.product_id', '=', 'products.id')
                    ->where('cart.user_id', $userId)
                    ->select('products.*','cart.id as cart_id')
                    ->get();
        return view('frontend/cartlist', ['products'=>$products]);
    }
    public function removeCart(Request $request, $id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function checkOut()
    {
        $userId = Session::get('user')['id'];
        $total = $products = DB::table('cart')
                    ->join('products', 'cart.product_id', '=', 'products.id')
                    ->sum('products.price');
        return view('frontend/checkout', ['total'=>$total]);
    }
    public function orderplace(Request $request)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $request->input();
        return redirect('/');
    }











}
