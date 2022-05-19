<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\AdminNavbar;
use App\Models\AdminHome;
use App\Models\AdminAbout;
use App\Models\AdminClietnsSection;
use App\Models\HomeBagImg;
use App\Models\AdminFeatures;
use App\Models\AdminServis;
use App\Models\AdminTeam;
use App\Models\AdminContact;
use App\Models\AdminCount;
use App\Models\AdminWhyUs;
use App\Models\AdminWhyUsBlock;
use App\Models\AdminCta;
use App\Models\Gallery;





class AdminController extends Controller
{

    public function home() {
// home bg img start
        if(HomeBagImg::count() == 0) {
            $Bag_Img = new HomeBagImg();
            $Bag_Img->img = 'hero-bg.jpg';
            $Bag_Img->save();
        }
// home bg img end 

// Navbar start 
        if(AdminNavbar::count() == 0) {
            $navbar = new AdminNavbar;
            $navbar->home = 'главная';
            $navbar->about ='о нас';
            $navbar->servis = 'сервис';
            $navbar->portfolio = 'портфолио';
            $navbar->team = 'команда';
            $navbar->Contact = 'контакты';
            $navbar->Get_Started = 'ознакомиться';
            $navbar->save();
        }
// navbar end 

// home start 
        if(AdminHome::count() == 0) {
            $home = new AdminHome;
            $home->title = 'Fregat Hotel';
            $home->slogan = 'Добро пожаловать в наш отель!';
            $home->button = 'О НАС';
            $home->save();
        }
// home end

// Count Start 
            if(AdminCount::count() == 0) {
                $count = new AdminCount();
                $count->Clients = 'Достопримечательностей в городе';
                $count->CountClients = '10';
                $count->Projects = 'Количество номеров';
                $count->CountProjects = '30';
                $count->Support = 'Количество вместимости клиентов';
                $count->CountSupport = '70';
                $count->Workes = 'Количество столовых';
                $count->CountWorkes = '1';
                $count->save();
            }

// Count End 



// About start 
        if(AdminAbout::count() == 0) {
            $about = new AdminAbout();
            $about->title = 'Раздел О НАС';
            $about->slogan = 'Описание над пунктами';
            $about->descriptionUp = 'Описание верхнее';
            $about->point1 = 'Описание пункт первый';
            $about->point2 = 'Описание пункт второй';
            $about->point3 = 'Описание пункт третий';
            $about->descriptionDown = 'Описание нижние';
            $about->save();
        }
// About End 

// About Boxes Start 
        if(AdminWhyUs::count() == 0) {

            $why = new AdminWhyUs();
            $why->title = 'Название бокса';
            $why->slogan = 'Описание бокса';
            $why->button = 'Кнопка ';
            $why->save();

        }
// About Boxes end 

// Admin Why Us Block START 
    if(AdminWhyUsBlock::count() == 0) {
        $why_block = new AdminWhyUsBlock();
        $why_block->title = 'Название бокса';
        $why_block->slogan = 'Описание бокса';
        $why_block->icon = '<i class="bx bx-receipt"></i>';
        $why_block->save();
        
        $why_block = new AdminWhyUsBlock();
        $why_block->title = 'Название бокса';
        $why_block->slogan = 'Описание бокса';
        $why_block->icon = '<i class="bx bx-cube-alt"></i>';
        $why_block->save();

        $why_block = new AdminWhyUsBlock();
        $why_block->title = 'Название бокса';
        $why_block->slogan = 'Описание бокса';
        $why_block->icon = '<i class="bx bx-images"></i>';
        $why_block->save();
    }
// Admin Why Us Block END

// cta start 
        if(AdminCta::count() == 0) {
            $cta = new AdminCta;
            $cta->title = 'Fregat Hotel';
            $cta->slogan = 'Добро пожаловать в наш отель!';
            $cta->button = 'Далее';
            $cta->save();
        }
// cta end 


// Clients Section Start
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
// Clients Section End


// portfolio card start 

if(Gallery::count() == 0) {
    $add_gallery = new Gallery();
    $add_gallery->image = 'default1.jpg';
    $add_gallery->name = 'Двухместный номер';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default2.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default3.jpg';
    $add_gallery->name = 'Двухместный номер';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default4.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default5.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default6.jpg';
    $add_gallery->name = 'Дербент';
    $add_gallery->teg = 'app';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default7.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default8.jpg';
    $add_gallery->name = 'Сулак';
    $add_gallery->teg = 'card';
    $add_gallery->save();

    $add_gallery = new Gallery();
    $add_gallery->image = 'default9.jpg';
    $add_gallery->name = 'Чиркейская гэс';
    $add_gallery->teg = 'web';
    $add_gallery->save();
}
// porfolio card end 



// Admin Servis Start 
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

        }

      
        if(AdminTeam::count() == 0) {
// первый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-1.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// второй блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-2.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// третий сблок 
            $team = new AdminTeam();
            $team->img = 'testimonials-3.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
// четвертый блок 
            $team = new AdminTeam();
            $team->img = 'testimonials-5.jpg';
            $team->name = 'Имя работника';
            $team->work = 'Должность работника';
            $team->slogan = 'Описание';
            $team->save();
     }
        if(AdminContact::count() == 0) {
            $contact = new AdminContact();
            $contact->address = 'Aдрес';
            $contact->email = 'Введите почту';
            $contact->tel = 'Введите номер телефона';
            $contact->save();
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

public function edit_bag_imgHome($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
    ]); 
    
    $Bag_Img = HomeBagImg::find($id);
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

    return view ('admin.admin_home' , ['home' => $home->all()]);
}  

// Home END

// Count Start 


public function admin_count(){
    $count = new AdminCount();
    return view ('admin.admin_count' , ['count' => $count->all()]);
}  


public function edit_count(Request $data){
    $valid = $data->validate([
        'Clients' => ['required'],
        'CountClients' => ['required'],
        'Projects' => ['required'],
        'CountProjects' => ['required'],
        'Support' => ['required'],
        'CountSupport' => ['required'],
        'Workes' => ['required'],
        'CountWorkes' => ['required']
    ]); 
    
    $count = AdminCount::first();
    $count->Clients = $data->input('Clients');
    $count->CountClients = $data->input('CountClients');
    $count->Projects = $data->input('Projects');
    $count->CountProjects = $data->input('CountProjects');
    $count->Support = $data->input('Support');
    $count->CountSupport = $data->input('CountSupport');
    $count->Workes = $data->input('Workes');
    $count->CountWorkes = $data->input('CountWorkes');
    $count->save();
    return redirect()->route('admin_count');
}  


// Count End 


// about start 

public function admin_about(){
    $about = new AdminAbout();
    return view ('admin.admin_about' , ['about' => $about->all()]);
}  


public function edit_about(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'descriptionUp' => ['required'],
        'point1' => ['required'],
        'point2' => ['required'],
        'point3' => ['required'],
        'descriptionDown' => ['required']
    ]); 
    
    $about = AdminAbout::first();    
    $about->title = $data->input('title');
    $about->slogan = $data->input('slogan');
    $about->descriptionUp = $data->input('descriptionUp');
    $about->point1 = $data->input('point1');
    $about->point2 = $data->input('point2');
    $about->point3 = $data->input('point3');
    $about->descriptionDown = $data->input('descriptionDown');
    $about->save();

    return redirect()->route('admin_about');
}  

// about end 


// <!-- ======= About Boxes Section Start======= -->


public function admin_why_us(){
    $why = new AdminWhyUs();
    return view ('admin.admin_why_us' , ['why' => $why->all()]);
}  

public function edit_why_us($id, Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'button' => ['required'],
    ]); 
    
    $why = AdminWhyUs::find($id);
    $why->title = $data->input('title');
    $why->slogan = $data->input('slogan');
    $why->button = $data->input('button');
    $why->save();

    return redirect()->route('admin_why_us');
}  

// public function delete_about_boxes($id){
//     AdminAboutBoxes::find($id)->delete();
//     return redirect()->route('admin_about_boxes');
// }
// <!-- ======= About Boxes Section End ======= -->


// Why Us Block START 

public function admin_why_us_block(){
    $why_block = new AdminWhyUsBlock();
    return view ('admin.admin_why_us_block' , ['why_block' => $why_block->all()]);
}  

public function edit_why_us_block($id, Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'icon' => ['required'],
    ]); 
    
    $why_block = AdminWhyUsBlock::find($id);
    $why_block->title = $data->input('title');
    $why_block->slogan = $data->input('slogan');
    $why_block->icon = $data->input('icon');
    $why_block->save();

    return redirect()->route('admin_why_us_block');
}  

// Why Us Block END 


public function admin_cta(){   
    $cta = new AdminCta();
    return view ('admin.admin_cta' , ['cta' => $cta->all()]);
}  

public function edit_cta(Request $data){
    $valid = $data->validate([
        'title' => ['required'],
        'slogan' => ['required'],
        'button' => ['required'],
    ]); 
    
    $cta = AdminCta::first();
    $cta->title = $data->input('title');
    $cta->slogan = $data->input('slogan');
    $cta->button = $data->input('button');
    $cta->save();

    return redirect()->route('admin_cta');
}  




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



// portfolio card start 


public function gallery() {
    $gallery = Gallery::all();
    return view('admin.gallery', ['gallery' => $gallery]);
}

public function edit_gallery($id, Request $data) {
    $gallery = Gallery::find($id);

    if(!empty($data->image)) {
        $file = $data->file('image');
        $upload_folder = 'public/gallery';
        $filename = rand().'_'.$file->getClientOriginalName();
        if($gallery->image != 'default1.jpg' && $gallery->image != 'default2.jpg' && $gallery->image != 'default3.jpg' && $gallery->image != 'default4.jpg' && $gallery->image != 'default5.jpg' && $gallery->image != 'default6.jpg' && $gallery->image != 'default7.jpg' && $gallery->image != 'default8.jpg' && $gallery->image != 'default9.jpg'){
            Storage::delete($upload_folder . '/' . $gallery->image);
        }
        $gallery->image = $filename;
        Storage::putFileAs($upload_folder, $file, $filename);
    }

    if($data->input('name') != '') {
        $gallery->name = $data->input('name');
    }

    $gallery->save();

    return redirect()->route('gallery');
}

// portfolio card end 





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



// Admin portfolio card Start 
public function PortfolioCard(){
    $card = new CardPortfolio();
    return view ('admin.PortfolioCard' , ['card' => $card->all()]);
}  
public function add_CardPotfolio(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'description' => ['required'],
        
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/CardPortfolio/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $card = new CardPortfolio();
    $card->img = $filename;
    $card->title = $data->input('title');
    $card->description = $data->input('description');
    $card->save();
    return redirect()->route('PortfolioCard');
}

public function edit_CardPotfolio(Request $data, $id){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'title' => ['required'],
        'description' => ['required'],
        
    ]); 
    
    $card = CardPortfolio::find($id);
    if($data->file('img') != '') {
        $upload_folder = 'public/CardPortfolio/'; //Создается автоматически
        $file = $data->file('img');
        $filename = $file->getClientOriginalName();
        Storage::delete($upload_folder . '/' . $card->img);
        Storage::putFileAs($upload_folder, $file, $filename);    
        $card->img = $filename;
        Storage::putFileAs($upload_folder, $file, $filename); 
    } else {
        $card->img = $card->img;
    }
    
    $card->title = $data->input('title');
    $card->description = $data->input('description');
    $card->save();

    return redirect()->route('PortfolioCard');
}  

public function delete_CardPotfoliot($id){
    CardPortfolio::find($id)->delete();
    return redirect()->route('PortfolioCard');
}
// Admin Portfolio card End 



// <!-- ======= Admin Team Section Start======= -->


public function admin_team(){
    $team = new AdminTeam();
    return view ('admin.admin_team' , ['team' => $team->all()]);
}  
public function add_team(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'name' => ['required'],
        'work' => ['required'],
        'slogan' => ['required']
    ]); 

    $file = $data->file('img');
    $upload_folder = 'public/AdminTeam/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $team = new AdminTeam();
    $team->img = $filename;
    $team->name = $data->input('name');
    $team->work = $data->input('work');
    $team->slogan = $data->input('slogan');
    $team->save();
    return redirect()->route('admin_team');
}

public function edit_team($id, Request $data){
    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'name' => ['required'],
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
    
    $team->name = $data->input('name');
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


// contact start 
public function admin_contact(){
    $contact = new AdminContact();
    return view ('admin.admin_contact' , ['contact' => $contact->first()]);
}  

public function edit_contact($id, Request $data){
    $valid = $data->validate([
        'address' => [''],
        'email' => [''],
        'tel' => [''],
    ]); 
    
    $contact = AdminContact::find($id);
    $contact->address = $data->input('address');
    $contact->email = $data->input('email');
    $contact->tel = $data->input('tel');
    $contact->save();

    return redirect()->route('admin_contact');
}  

public function delete_contact($id){
    AdminContact::find($id)->delete();
    return redirect()->route('admin_contact');
}
// contact end 
}
