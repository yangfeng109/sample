<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Rwquests;

class UserController extends Controller
{
    public function creat()
    {
        return view('users.create');
    }
}
