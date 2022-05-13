<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\AdminNavbar;
use App\Models\AdminHome;
use App\Models\AdminAbout;
use App\Models\AdminAboutBoxes;
use App\Models\AdminClietnsSection;
use App\Models\HomeBagImg;
use App\Models\AdminFeatures;
use App\Models\AdminServis;
use App\Models\AdminTeam;

class MainController extends Controller
{
    public function welcome ()
{
    $navbar = new AdminNavbar();
    $home = new AdminHome();
    $about = new AdminAbout();
    $about_boxes = new AdminAboutBoxes();
    $clietns = new AdminClietnsSection();
    $Bag_Img = new HomeBagImg();
    $features = new AdminFeatures();
    $servis = new AdminServis();
    $team = new AdminTeam();
    
    
   
    return view('welcome', ['navbar' => $navbar->all(), 'home' => $home->all(), 'about' => $about->all(),'about_boxes' => $about_boxes->all(), 'clietns' => $clietns->all(),'Bag_Img' => $Bag_Img->first(), 'features' => $features->all(),'servis' => $servis->all(),'team' => $team->all(),]);
}


}
