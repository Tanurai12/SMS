<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use App\Models\Checkuser;
use App\Models\Collegesetting;
use App\Models\Contact;
use App\Models\Ourtestimonial;
use Illuminate\Support\Facades\Auth;

use App\Models\Secondmenu;
use App\Models\Secondpage;
use App\Models\Secondslider;
use App\Models\Vendor;
use App\Models\User;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function frontpage()
    {

        $testis = Ourtestimonial::all();
        $menuItems = Secondmenu::all();
        foreach ($menuItems as $menuItem) {

            $menu[$menuItem->parent_id][] = $menuItem;
        }
        $datas = Secondslider::all();
        $infos = Collegesetting::find(1);
        return view('home.akpgc-main', compact('datas', 'infos', 'menu','testis'));
    }

    public function adminpanel(Request $req)
    {

        $testis = Ourtestimonial::all();
        $search = $req['search']  ?? "";
        if ($search != "") {

            $datas = Secondslider::where('title', 'LIKE', "%$search%")->get();
        } else {
            $datas = Secondslider::get();
        }

        $data = compact('datas', 'search');
        $query = Contact::all();
        return view('dashboard.admin', compact('query', 'testis'))->with($data);
    }
    public function addpage()
    {
        return view('dashboard.addpage');
    }

    public function slider()
    {
        return view('dashboard.slider');
    }
    public function sliderupload(Request $req)
    {
        $data = new Secondslider;
        $data->title = $req->title;
        $fileuplod = time() . "-testimonial." . $req->file('image')->getClientOriginalExtension(); //time is used generated aany random time  ======= "-testimonial."is used add just for see have no any specific rule=========== $req->file('image')->getClientOriginalExtension()  it is used to get original extension...............
        $req->file('image')->move(public_path('images'), $fileuplod);  //here we write   $req->file('image') to get requested image ===============  ->move(public_path('images'), $fileuplod); it is used to move that picture to the public folder images folder with """"""""$fileuploads"""""""" that means with name that we assign above
        $data->img = 'images/' . $fileuplod;   //and finally we'll also assign it to table with folder name """"""""'images/'"""""""" .$fileuplod; for the name of image..............
        $data->save();
    }
    public function addNav()
    {
        $datas = Secondmenu::paginate(7);
        $pages = Secondpage::all();
        return view('dashboard.addNav', compact('datas', 'pages'));
    }

    public function formNav(Request $req)
    {
        // dd($req);
        $data = new Secondmenu();
        $data->title = $req->label;
        if (isset($req->url)) {
            $data->url = $req->url;
        } else {
            $data->url = $req->pageselect;
        }

        $data->parent_id = $req->menuselect;

        $data->save();
    }
    public function savepage(Request $req)
    {
        $page = new Secondpage();
        $page->title = $req->title;
        $page->content = $req->content;
        $page->slug = strtolower(str_replace(" ", "-", $req->title));
        $page->save();
    }
    public function setting()
    {
        $infos = Collegesetting::find(1);
        return view('dashboard.setting', compact('infos'));
    }
    public function updatesetting(Request $req)
    {
        // dd($req);
        $data = Collegesetting::find(1);
        $data->color = $req->site_color;
        $data->collegename = $req->collegename;
        $data->affiliate = $req->affiliate;
        $data->address = $req->address;
        $data->since = $req->since;
        $data->mail1 = $req->mail1;
        $data->mail2 = $req->mail2;
        $data->phone1 = $req->phone1;
        $data->phone2 = $req->phone2;
        if ($req->hasFile('map') && $req->file('map')->isValid()) {
            $fileuplod = time() . "-map." . $req->file('map')->getClientOriginalExtension();
            $req->file('map')->move(public_path('images'), $fileuplod);
            $data->logo = 'images/' . $fileuplod;
        }
        if ($req->hasFile('logo') && $req->file('logo')->isValid()) {
            $fileuplod = time() . "-logo." . $req->file('logo')->getClientOriginalExtension();
            $req->file('logo')->move(public_path('images'), $fileuplod);
            $data->logo = 'images/' . $fileuplod;
        }

        $data->update();
    }
    public function showpage($slug)
    {
        $data = Secondpage::where('slug', $slug)->first();
        // dd($data);
        return view('home.page_layout', compact('data'));
    }

    public function contact(Request $req)
    {
        $data = new Contact();
        $data->name = $req->name;
        $data->email = $req->email;
        $data->msg = $req->msg;
        $data->save();
    }
    public function deleteimage($id)
    {

        $data = Secondslider::find($id);
        // dd($data);
        if ($data) {
            $data->delete();
            return redirect('displayImage')->with('del_msg', 'Record Deleted Successfully !');
        }
    }


    public function editimage($id)
    {
        $datas = Secondslider::find($id);
        return view('dashboard.editimage', compact('datas'));
    }

    public function updateimage(Request $req, $id)
    {
        $data = Secondslider::where('id', $id)->first();
        if ($req->hasFile('image') && $req->file('image')->isValid()) {
            $fileuplod = time() . "_banner." . $req->file('image')->getClientOriginalExtension();
            $req->file('image')->move(public_path('images'), $fileuplod);
            $data->image = 'images/' . $fileuplod;
        } else {
            $data->title = $req->title;
        }
        $data->title = $req->title;
        $data->update();
        if ($data) {
            return redirect('dashboard.admin')->with('upd_msg', 'Image Updated Successfully');
        }
    }


    public function feedback(Request $req)
    {
        $data = new Ourtestimonial();
        $data->name = $req->name;
        $data->address = $req->add;
        $data->msg = $req->msg;
        $data->img = $req->img;
        $data->save();
    }
    public function register()
    {
        return view('auth.register');
    }

    public function registered(Request $req)
    {
        if (!isset($req->type)) {
            $data = new User();
        } else {
            if ($req->type == 0) {

                $data = new User();
            } elseif ($req->type == 1) {

                $data = new Vendor();
            }
        }

        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
    }
    public function login()
    {
        return view('auth.login');
    }

    public function loginauth(Request $req)
    {
        // dd($req);
        if ($req->type == 0) {

            // dd('hello how are you');
            if (auth()->guard('web')->attempt(['email' => $req->email, 'password' => $req->password])) {


                return redirect()->route('akpgc');
            }
        } elseif ($req->type == 1) {

            if (auth()->guard('vendor')->attempt(['email' => $req->email, 'password' => $req->password])) {
                return redirect()->route('dashboard');
            }
        } else {

            return redirect()->route('akpgc');
        }
    }
    public function logout()
    {
        Auth::logout();        
        return redirect()->route('login');
    }
}
