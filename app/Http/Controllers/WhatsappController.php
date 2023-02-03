<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Session;

class WhatsappController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $whatsapps = Whatsapp::all();
        Session::put('menu','whatsapp');
        return view('dashboard.whatsapp',compact('whatsapps'));
    }

    public function create(Request $request)
    {
        $whatsapp = new Whatsapp;
        $whatsapp->nama_cabang = $request->nama_cabang;
        $whatsapp->wa = $request->wa;
        $whatsapp->save();
        return redirect('whatsapp')
        ->with('success','New data whatsapp successfully added!');
    }

    public function update(Request $request,$id)
    {
        $whatsapp = Whatsapp::find($id);
        $whatsapp->nama_cabang = $request->nama_cabang;
        $whatsapp->wa = $request->wa;
        $whatsapp->save();
        return redirect('whatsapp')
        ->with('success','Data whatsapp successfully updated!');
    }

    public function delete($id)
    {
        Whatsapp::find($id)->delete();
         return redirect('whatsapp')
         ->with('success','Data whatsapp successfully deleted!');
    }
}
