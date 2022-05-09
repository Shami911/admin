<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AdminNavbar;

class MainController extends Controller
{
    public function welcome()
{
    $navbar = new AdminNavbar();
    return view('welcome', ['navbar' => $navbar->all()]);
}



}
