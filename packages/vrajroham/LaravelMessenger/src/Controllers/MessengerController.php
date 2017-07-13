<?php

namespace vrajroham\LaravelMessenger\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use vrajroham\LaravelMessenger\Model\User;
use vrajroham\LaravelMessenger\Model\Message;
use vrajroham\LaravelMessenger\Events\MessagePosted;
use Auth;

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

    public function send_message(request $request){
        $message = Message::create(['user_id'=>1, 'message' => $request->message,'user_to' => $request->user_to]);
        event(new MessagePosted($message,Auth::user()));
    }
}
