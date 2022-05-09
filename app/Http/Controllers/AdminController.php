<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\AdminNavbar;

class AdminController extends Controller
{
    
//about start ------------------------
   public function admin_navbar(){
    $navbar = new AdminNavbar();
    return view ('admin.admin_navbar' , ['navbar' => $navbar->all()]);
}
    public function add_navbar(Request $data){
        $valid = $data->validate([
            'home' => ['required'],
            'about' => ['required'],
            'servis' => ['required'],
            'portfolio' => ['required'],
            'team' => ['required'],
            'dropdown' => ['required'],
            'Contact' => ['required'],
            'Get_Started' => ['required']
        ]); 
 

        $navbar = new AdminNavbar();
        $navbar->home = $data->input('home');
        $navbar->about = $data->input('about');
        $navbar->servis = $data->input('servis');
        $navbar->portfolio = $data->input('portfolio');
        $navbar->team = $data->input('team');
        $navbar->dropdown = $data->input('dropdown');
        $navbar->Contact = $data->input('Contact');
        $navbar->Get_Started = $data->input('Get_Started');
        $navbar->save();
        return redirect()->route('admin_navbar');
    }
    public function edit_navbar(Request $data, $id){
        $valid = $data->validate([
            'home' => ['required'],
            'about' => ['required'],
            'servis' => ['required'],
            'portfolio' => ['required'],
            'team' => ['required'],
            'dropdown' => ['required'],
            'Contact' => ['required'],
            'Get_Started' => ['required']
        ]); 
        
    
        $navbar = new AdminNavbar();
        $navbar->home = $data->input('home');
        $navbar->about = $data->input('about');
        $navbar->servis = $data->input('servis');
        $navbar->portfolio = $data->input('portfolio');
        $navbar->team = $data->input('team');
        $navbar->dropdown = $data->input('dropdown');
        $navbar->Contact = $data->input('Contact');
        $navbar->Get_Started = $data->input('Get_Started');
        $navbar->save();
        return redirect()->route('admin_navbar');
    }  
    public function delete_navbar($id){
        AdminNavbar::find($id)->delete();
        return redirect()->route('admin_navbar');
    }
// about end -----------------------
}
