<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index (Request $request)
    {
        $items = User::all();
        return view ('user.index', ['items' => $items]);
    }
}