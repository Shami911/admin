<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\AdminNavbar;
use App\Models\AdminHome;
use App\Models\AdminAbout;
use App\Models\AdminClietnsSection;
use App\Models\HomeBagImg;
use App\Models\AdminServis;
use App\Models\AdminTeam;
use App\Models\AdminContact;
use App\Models\AdminCount;
use App\Models\AdminWhyUs;
use App\Models\AdminWhyUsBlock;
use App\Models\AdminCta;
use App\Models\Gallery;




class MainController extends Controller
{
    public function welcome ()
{
    $navbar = new AdminNavbar();
    $home = new AdminHome();
    $about = new AdminAbout();
    $clietns = new AdminClietnsSection();
    $Bag_Img = new HomeBagImg();
    $servis = new AdminServis();
    $team = new AdminTeam();
    $contact = new AdminContact();
    $count = new AdminCount();
    $why = new AdminWhyUs();
    $why_block = new AdminWhyUsBlock();
    $cta = new AdminCta();
    $gallery = new Gallery();

    
    
    
   
    return view('welcome', ['navbar' => $navbar->all(), 'home' => $home->all(), 'about' => $about->all(),'clietns' => $clietns->all(),'Bag_Img' => $Bag_Img->first(), 'servis' => $servis->all(),'team' => $team->all(),'contact' => $contact->all(),'count' => $count->first(), 'why' => $why->first(), 'why_block' => $why_block->all(),'cta' => $cta->first(), 'gallery' => $gallery->all()]);
}


}
