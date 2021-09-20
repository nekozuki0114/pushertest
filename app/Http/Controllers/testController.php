<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Events\MyEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    public function send(Request $request){
      event(new MyEvent($request->message));
      return "送信しました";
    }
}