<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMessage;

class UserMessageController extends Controller
{
   public function index(){
    $userMessages =  UserMessage::orderBy('id','desc')->paginate(10);
    return view('admin.user-message.index',compact('userMessages'));
   }
}
