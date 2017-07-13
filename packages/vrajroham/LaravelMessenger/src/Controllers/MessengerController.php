<?php

namespace vrajroham\LaravelMessenger\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use vrajroham\LaravelMessenger\Model\User;
class MessengerController extends Controller
{
    /**
     * Create a new Skeleton Instance
     */
    public function __construct()
    {
        // constructor body
    }

    public function home(Request $request)
    {
        return view('messenger::home')->with(['user' => 'vrajroham']);
    }

    public function all_users(Request $request){
        return response()->json(['users' => User::get()]);
    }
}
