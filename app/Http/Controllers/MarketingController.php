<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Session;
use PDF;

class MarketingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::with('vendor')->get();
        Session::put('menu','cars');
        return view('marketing.marketing',compact('cars'));
    }

        public function pdfmarketing($id)
    {
        $cars = Car::where('id', $id)->get();
        $pdf = PDF::loadview('marketing.pdfmarketing', compact('cars'));
        return $pdf->stream();
        // return view('dashboard.pdf',compact('cars'));
    }

    public function pdfmarketingall()
    {
        $cars = Car::all();
        $pdf = PDF::loadview('marketing.pdfmarketingall', compact('cars'));
        return $pdf->stream();
        // return view('dashboard.pdf',compact('cars'));
    }
}
