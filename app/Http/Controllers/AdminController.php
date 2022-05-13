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




class AdminController extends Controller
{

    public function home() {
        if(HomeBagImg::count() == 0) {
            $Bag_Img = new HomeBagImg();
            $Bag_Img->img = 'hero-bg.jpg';
            $Bag_Img->save();
        }
        if(AdminNavbar::count() == 0) {
            $navbar = new AdminNavbar;
            $navbar->home = 'главная';
            $navbar->about ='о нас';
            $navbar->servis = 'сервис';
            $navbar->portfolio = 'портфолио';
            $navbar->team = 'команда';
            $navbar->Contact = 'контакты';
            $navbar->Get_Started = 'бронирование';
            $navbar->save();
        }
        if(AdminHome::count() == 0) {
            $home = new AdminHome;
            $home->title = 'Название нашей страницы';
            $home->slogan = 'Добро пожаловать на нашу страничку';
            $home->button = 'Вперед';
            $home->save();
        }
        if(AdminAbout::count() == 0) {
            $about = new AdminAbout();
            $about->img = 'about.jpg';
            $about->title = 'Раздел О НАС';
            $about->slogan = 'Описание над пунктами';
            $about->point1 = 'Описание пункт первый';
            $about->point2 = 'Описание пункт второй';
            $about->point3 = 'Описание пункт третий';
            $about->point4 = 'Описание пункт четвертый';
            $about->description = 'Описание под пунктами';
            $about->save();
        }

        if(AdminAboutBoxes::count() == 0) {

            $about_boxes = new AdminAboutBoxes();
            $about_boxes->img = 'about-boxes-1.jpg';
            $about_boxes->icon = '<i class="bi bi-apple"></i>';
            $about_boxes->title = 'Название бокса';
            $about_boxes->slogan = 'Описание бокса';
            $about_boxes->save();

            $about_boxes = new AdminAboutBoxes();
            $about_boxes->img = 'about-boxes-2.jpg';
            $about_boxes->icon = '<i class="bi bi-award-fill"></i>';
            $about_boxes->title = 'Название бокса';
            $about_boxes->slogan = 'Описание бокса';
            $about_boxes->save();
            
            $about_boxes = new AdminAboutBoxes();
            $about_boxes->img = 'about-boxes-3.jpg';
            $about_boxes->icon = '<i class="bi bi-asterisk"></i>';
            $about_boxes->title = 'Название бокса';
            $about_boxes->slogan = 'Описание бокса';
            $about_boxes->save();
        }
        if(AdminClietnsSection::count() == 0) {

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-1.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-2.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-3.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-4.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-5.png';
            $clietns->save();

            $clietns = new AdminClietnsSection();
            $clietns->img = 'client-6.png';
            $clietns->save();
        }
        if(AdminServis::count() == 0) {
// первый блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// второй блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// третий блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// четвертый блок 
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// пятый блок
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
// шестой блок 
            $servis = new AdminServis;
            $servis->icon = '<i class="bi bi-aspect-ratio"></i>';
            $servis->title = 'Название блока';
            $servis->descripteon = 'Описание блока';
            $servis->save();
        }

        if(AdminFeatures::count() == 0) {
// первый блок 
            $features = new AdminFeatures;
            $features->icon ='<i class="bi bi-asterisk"></i>';
            $features->title = 'Двухкомнатный номер';
            $features->slogan = 'Описание номера';
            $features->point1 = 'Описание первое';
            $features->point2 = 'Описание второе';
            $features->point3 = 'Описание третье';
            $features->description ='Доп описание';
            $features->img = 'features-1.png';
            $features->save();
// второй блок
            $features = new AdminFeatures;
            $features->icon ='<i class="bi bi-asterisk"></i>';
            $features->title = 'Двухкомнатный номер';
            $features->slogan = 'Описание номера';
            $features->point1 = 'Описание первое';
            $features->point2 = 'Описание второе';
            $features->point3 = 'Описание третье';
            $features->description ='Доп описание';
            $features->img = 'features-1.png';
            $features->save();
// третий блок 
            $features = new AdminFeatures;
            $features->icon ='<i class="bi bi-asterisk"></i>';
            $features->title = 'Двухкомнатный номер';
            $features->slogan = 'Описание номера';
            $features->point1 = 'Описание первое';
            $features->point2 = 'Описание второе';
            $features->point3 = 'Описание третье';
            $features->description ='Доп описание';
            $features->img = 'features-1.png';
            $features->save();
// четвертый блок 
            $features = new AdminFeatures;
            $features->icon ='<i class="bi bi-asterisk"></i>';
            $features->title = 'Двухкомнатный номер';
            $features->slogan = 'Описание номера';
            $features->point1 = 'Описание первое';
            $features->point2 = 'Описание второе';
            $features->point3 = 'Описание третье';
            $features->description ='Доп описание';
            $features->img = 'features-1.png';
            $features->save();
        }

        if(AdminTeam::count() == 0) {
// первый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-1.jpg';
            $team->title = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// второй блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-2.jpg';
            $team->title = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// третий сблок 
            $team = new AdminTeam();
            $team->img = 'testimonials-3.jpg';
            $team->title = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// четвертый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-5.jpg';
            $team->title = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
     }


        return view('admin.cp_home');
    }
    
//about start ------------------------
   public function admin_navbar(){
    $navbar = new AdminNavbar();
    return view ('admin.admin_navbar' , ['navbar' => $navbar->all()]);
}

    public function edit_navbar(Request $data){
        $valid = $data->validate([
            'home' => ['required'],
            'about' => ['required'],
            'servis' => ['required'],
            'portfolio' => ['required'],
            'team' => ['required'],
            'Contact' => ['required'],
            'Get_Started' => ['required']
        ]); 
        
    
        $navbar = AdminNavbar::first();
        $navbar->home = $data->input('home');
        $navbar->about = $data->input('about');
        $navbar->servis = $data->input('servis');
        $navbar->portfolio = $data->input('portfolio');
        $navbar->team = $data->input('team');
        $navbar->Contact = $data->input('Contact');
        $navbar->Get_Started = $data->input('Get_Started');
        $navbar->save();
        return redirect()->route('admin_navbar');
    }  
    public function delete_navbar(){
        AdminNavbar::first()->delete();
        return redirect()->route('admin_navbar');
    }
// about end -----------------------


// home bag Img start 
public function admin_bag_imgHome(){
    $Bag_Img = new HomeBagImg();
    return view ('admin.admin_bag_imgHome' , ['Bag_Img' => $Bag_Img->all()]);
}  

public function edit_bag_imgHome(Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
    ]); 
    
    $Bag_Img = HomeBagImg::first();
    if($data->file('img') != '') {
        $upload_folder = 'public/HomeBagImg/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        if($Bag_Img->img != 'hero-bg.jpg'){
            Storage::delete($upload_folder . '/' . $Bag_Img->img);
        } 
        $Bag_Img->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $Bag_Img->img = $Bag_Img->img;
    }
    $Bag_Img->save();

    return redirect()->route('admin_bag_imgHome');
}  

public function delete_bag_imgHome(){
    HomeBagImg::first()->delete();
    return redirect()->route('admin_bag_imgHome');
}
// home bag Img end 



// HOME START
public function admin_home(){   
    $home = new AdminHome();
    return view ('admin.admin_home' , ['home' => $home->all()]);
}  

public function edit_home(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'button' => ['required'],
    ]); 
    
    $home = AdminHome::first();
    $home->title = $data->input('title');
    $home->slogan = $data->input('slogan');
    $home->button = $data->input('button');
    $home->save();

    return redirect()->route('admin_home');
}  

// Home END

// about start 

public function admin_about(){
    $about = new AdminAbout();
    return view ('admin.admin_about' , ['about' => $about->all()]);
}  


public function edit_about(Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'slogan' => ['required'],
        'point1' => ['required'],
        'point2' => ['required'],
        'point3' => ['required'],
        'point4' => ['required'],
        'description' => ['required']
    ]); 
    
    $about = AdminAbout::first();
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminAbout/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $about->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $about->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $about->img = $about->img;
    }
    
    $about->title = $data->input('title');
    $about->slogan = $data->input('slogan');
    $about->point1 = $data->input('point1');
    $about->point2 = $data->input('point2');
    $about->point3 = $data->input('point3');
    $about->point4 = $data->input('point4');
    $about->description = $data->input('description');
    $about->save();

    return redirect()->route('admin_about');
}  

// about end 


// <!-- ======= About Boxes Section Start======= -->


public function admin_about_boxes(){
    $about_boxes = new AdminAboutBoxes();
    return view ('admin.admin_about_boxes' , ['about_boxes' => $about_boxes->all()]);
}  

public function edit_about_boxes($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'icon' => ['required'],
        'title' => ['required'],
        'slogan' => ['required']
    ]); 
    
    $about_boxes = AdminAboutBoxes::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminAboutBoxes/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $about_boxes->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $about_boxes->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    }
    
    $about_boxes->icon = $data->input('icon');
    $about_boxes->title = $data->input('title');
    $about_boxes->slogan = $data->input('slogan');
    $about_boxes->save();

    return redirect()->route('admin_about_boxes');
}  

// public function delete_about_boxes($id){
//     AdminAboutBoxes::find($id)->delete();
//     return redirect()->route('admin_about_boxes');
// }
// <!-- ======= About Boxes Section End ======= -->


// <!-- ======= Admin Clients Section Start======= -->


public function admin_clients_section(){
    $clietns = new AdminClietnsSection();
    return view ('admin.admin_clients_section' , ['clietns' => $clietns->all()]);
}  

public function edit_clients_section($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp']
    ]); 
    
    $clietns = AdminClietnsSection::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminClietnsSection/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $clietns->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $clietns->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $clietns->img = $clietns->img;
    }
    $clietns->save();

    return redirect()->route('admin_clients_section');
}  

public function delete_clients_section($id){
    AdminClietnsSection::find($id)->delete();
    return redirect()->route('admin_clients_section');
}
// <!-- ======= Admin Clients Section End ======= -->


// <!-- =======admin_features_section Start======= -->


public function admin_features_section(){
    $features = new AdminFeatures();
    return view ('admin.admin_features_section' , ['features' => $features->all()]);
}  
public function add_features_section(Request $data){
    $valid = $data->validate([
        'icon' => ['required'],
        'title' => ['required'],
        'slogan' => ['required'],
        'point1' => ['required'],
        'point2' => ['required'],
        'point3' => ['required'],
        'description' => ['required'],
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp']
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/AdminFeatures/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 
    
 

    return redirect()->route('admin_features_section');
}

public function edit_features_section($id, Request $data){
    $valid = $data->validate([
        'icon' => ['required'],
        'title' => ['required'],
        'slogan' => ['required'],
        'point1' => ['required'],
        'point2' => ['required'],
        'point3' => ['required'],
        'description' => ['required'],
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp']
        
    ]); 

    $features = AdminFeatures::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/AdminFeatures/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $features->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $features->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $features->img = $features->img;
        }

        $features->icon = $data->input('icon');
        $features->title = $data->input('title');
        $features->slogan = $data->input('slogan');
        $features->point1 = $data->input('point1');
        $features->point2 = $data->input('point2');
        $features->point3 = $data->input('point3');
        $features->description = $data->input('description');
        $features->img = $filename;
        $features->save();

    return redirect()->route('admin_features_section');
}  

public function delete_features_section($id){
    AdminFeatures::find($id)->delete();
    return redirect()->route('admin_features_section');
}
// <!-- ======= admin_features_section End ======= -->


// <!-- ======= Admin Servis Start======= -->

public function admin_servis(){
    $servis = new AdminServis();
    return view ('admin.admin_servis' , ['servis' => $servis->all()]);
}  

public function edit_servis($id, Request $data){
    $valid = $data->validate([
        'icon' => ['required'],
        'title' => ['required'],
        'descripteon' => ['required']
    ]); 
    
    $servis = AdminServis::find($id);
    $servis->icon = $data->input('icon');
    $servis->title = $data->input('title');
    $servis->descripteon = $data->input('descripteon');
    $servis->save();
    return redirect()->route('admin_servis');
}  

public function delete_servis($id){
    AdminServis::find($id)->delete();
    return redirect()->route('admin_servis');
}
// <!-- ======= Admin Servis End ======= -->


// <!-- ======= Admin Team Section Start======= -->


public function admin_team(){
    $team = new AdminTeam();
    return view ('admin.admin_team' , ['team' => $team->all()]);
}  
public function add_team(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'work' => ['required'],
        'slogan' => ['required']
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/AdminTeam/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $team = new AdminTeam();
    $team->img = $filename;
    $team->title = $data->input('title');
    $team->work = $data->input('work');
    $team->slogan = $data->input('slogan');
    $team->save();
    return redirect()->route('admin_team');
}

public function edit_team($id, Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'work' => ['required'],
        'slogan' => ['required']
    ]); 
    
    $team = AdminTeam::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/AdminTeam/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $team->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $team->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $team->img = $team->img;
    }
    
    $team->title = $data->input('title');
    $team->work = $data->input('work');
    $team->slogan = $data->input('slogan');
    $team->save();

    return redirect()->route('admin_team');
}  

public function delete_team($id){
    AdminTeam::find($id)->delete();
    return redirect()->route('admin_team');
}
// <!-- ======= Admin Team Section End ======= -->

}
