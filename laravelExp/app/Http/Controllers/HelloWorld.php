<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hello;

class HelloWorld extends Controller
{
    public function sayHello()
    {
        // return view('hello');
        return view('hello', ['message' => Hello::helloWorldMessage()]);
    }
}
