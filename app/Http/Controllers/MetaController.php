<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Session;
use DB;
use Illuminate\Support\Facades\Validator;

class MetaController extends Controller
{

    public function addmeta(){
        return view('web.meta');
      }
     
      public function storemeta(Request $request){
        $product = new Meta();
        $product->product_meta_title = $request->product_meta_title;
        $product->product_meta_description = $request->product_meta_description; 
        $product->product_meta_keywords = $request->product_meta_keywords;
        $product->save();
        return redirect('/add-meta');
        // dd('success');
      }
     
    //   public function listmeta(){
    //     $productdata = Meta::all();
    //     return view('metatagsexample.list',compact('productdata'));
    //   }
     
      
     }
    

