<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function index() {
        $data = User::all();               
        return view("user.user", compact("data"));        
    }
}