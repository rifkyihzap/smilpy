<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('logins.login', [
            'title' => 'Login'
        ]);
    }
}
