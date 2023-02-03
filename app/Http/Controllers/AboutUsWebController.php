<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Banneraboutus;
use App\Models\Bannercontact;
use App\Models\User;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Session;

class AboutUsWebController extends Controller
{
    public function indexWeb()
    {
        $banneraboutus = Banneraboutus::first();
//        return $banneraboutus;
        $about = About::orderBy('updated_at', 'DESC')->latest()->take(1)->get();
        // dd($about);
        Session::put('menu','whatsapp');
        return view('web.aboutUs', compact('about','banneraboutus'));
    }

    public function contact()
    {
        $bannercontact = Bannercontact::first();
        $whatsapp = Whatsapp::orderBy('updated_at', 'DESC')->take(3)->get();
        $admin = User::where('role', 'admin')->latest()->take(1)->get();
        // dd($admin);
        return view('web.contact',compact('whatsapp', 'admin','bannercontact'));
    }
}
