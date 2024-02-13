<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //  $users = User::with('orders')->get();

        $users = User::addSelect([
            "latest_order_quantity"=>Order::select('quantity')
            ->whereColumn('user_id','users.id')
            ->latest()
            ->take(1)
        ])->get();

        return view('index',compact('users'));
    }



    public function show(User $user){
        return view('show',compact('user'));
    }
}
