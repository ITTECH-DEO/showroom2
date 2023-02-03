<?php

namespace App\Http\Controllers;

use App\Models\Banneraboutus;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Session;
use DB;
use Illuminate\Support\Facades\Validator;

class BanneraboutusController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function uploadFile(Request $request, $oke)
    {
        $result = '';
        $file = $request->file($oke);
        $name = $file->getClientOriginalName();
        // $tmp_name = $file['tmp_name'];

        $extension = explode('.', $name);
        $extension = strtolower(end($extension));

        $key = rand() . '-' . $oke;
        $tmp_file_name = "{$key}.{$extension}";
        $tmp_file_path = "admin/images/about/";
        $file->move($tmp_file_path, $tmp_file_name);
        // if(move_uploaded_file($tmp_name, $tmp_file_path)){
        $result = 'admin/images/about' . '/' . $tmp_file_name;
        // }
        return $result;
    }

    public function indexBanner()
    {
        $banneraboutus = Banneraboutus::orderBy('updated_at', 'DESC')->latest()->get();
        Session::put('menu','banneraboutus');
        return view('dashboard.banneraboutus', compact('banneraboutus'));
    }

    public function create(Request $request)
    {
        // return "ok";
        try {
            // DB::beginTransaction();
            //code...
            $validate = Validator::make($request->all(),[
                'image' => 'required|image'
            ],[
                'image.required' => 'image harus diisi',
                'image.image' => 'image harus berupa gambar',
            ]
        );
        
            $msg = '';
            if ($validate->fails()) {
                $msg = implode(', ', $validate->errors()->all());
                return redirect('banneraboutus')
                ->with('error', $msg);
            }

            $banneraboutus = new Banneraboutus;
            if ($request->file('image') != null) {
                
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                // return $ext;
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $banneraboutus->image = $tmp_file_path.$ext;

                // $banners->image = $banners;
                $banneraboutus->save();
                return redirect('banneraboutus')
                ->with('success', 'New about data successfully added!');
            }
            // dd($banners);
            
    
            // // About::create([
            // //     'about' => $request->about,
            // //     'image' => $ext ?? null
            // // ]);
            // $banners->save();
            // DB::commit();
            
          
                
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            return redirect('banneraboutus')
            ->with('error', 'New about data not be save!');
        }

    }
    public function update(Request $request, $id)
    {
        $image_file = $request->file('image');
        $image = 'image';

        $banneraboutus = Banneraboutus::find($id);

        $banneraboutus->banneraboutus = $request->banneraboutus;
        if ($image_file != null) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $banneraboutus->image = $tmp_file_path.$ext;
            }
        } else {
            $banneraboutus->image = $request->old_image;
        }
        $banneraboutus->save();
        return redirect('banneraboutus')
            ->with('success', 'Data about successfully updated!');
    }
    public function delete($id)
    {
        Banneraboutus::find($id)->delete();
        return redirect('banneraboutus')
            ->with('success', 'Data about successfully deleted!');
    }
    
}
