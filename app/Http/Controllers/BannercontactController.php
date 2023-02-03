<?php

namespace App\Http\Controllers;

use App\Models\Bannercontact;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Session;
use DB;
use Illuminate\Support\Facades\Validator;

class BannercontactController extends Controller
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
        $bannercontact = Bannercontact::orderBy('updated_at', 'DESC')->latest()->get();
        Session::put('menu','bannercontact');
        return view('dashboard.bannercontact', compact('bannercontact'));
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
                return redirect('bannercontact')
                ->with('error', $msg);
            }

            $bannercontact = new bannercontact;
            if ($request->file('image') != null) {
                
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                // return $ext;
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $bannercontact->image = $tmp_file_path.$ext;

                // $banners->image = $banners;
                $bannercontact->save();
                return redirect('bannercontact')
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
            return redirect('bannercontact')
            ->with('error', 'New about data not be save!');
        }

    }
    public function update(Request $request, $id)
    {
        $image_file = $request->file('image');
        $image = 'image';

        $bannercontact = Bannercontact::find($id);

        $bannercontact->bannercontact = $request->bannercontact;
        if ($image_file != null) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalName();
                $tmp_file_path = "admin/images/cars/";
                $file->move('admin/images/cars', $ext);
                $bannercontact->image = $tmp_file_path.$ext;
            }
        } else {
            $bannercontact->image = $request->old_image;
        }
        $bannercontact->save();
        return redirect('bannercontact')
            ->with('success', 'Data about successfully updated!');
    }
    public function delete($id)
    {
        Bannercontact::find($id)->delete();
        return redirect('bannercontact')
            ->with('success', 'Data about successfully deleted!');
    }
    
}
