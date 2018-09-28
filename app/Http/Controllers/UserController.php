<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Cart;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request,[
            'email'     =>  'email|required|unique:users',
            'password'  =>  'required|min:4'
        ]);

        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        Auth::login($user);


        return redirect()->route('user.profile');
    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile(){
        $oldCart = Session::get('cart');
        $cart    = new Cart($oldCart);
        return view('user.profile', ['cart' => $oldCart, 'products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
}
