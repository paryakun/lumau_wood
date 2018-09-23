<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;


class SubscriberController extends Controller
{
    public function index(){
        $subscribers  = Subscriber::paginate(15);
        return view('admin.subscriber.index',compact('subscribers'));
    }
}
