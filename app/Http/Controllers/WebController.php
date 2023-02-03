<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Bannerhomepage;
use App\Models\Meta;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use Session;
use DB;
use Auth;
class WebController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // return "ok";
        $bannerhome = Bannerhomepage::all();
        $viewproduct =Meta::find(1);
        // return $viewproduct;
        $cars = Car::with('vendor')->paginate(4);
//        return $cars;
        return view('web.index',compact('cars','bannerhome','viewproduct'));
        //return $cars;
    }

    // public function viewmeta($id){
    //     $viewproduct = \App\Models\Meta::find($id);
    //     return view('web.index',compact('meta'));
    //   }
    public function registCustomer(Request $request)
    {
        $User = new User;
        $User->role = 'customer';
        $User->name = $request->name;
        $User->email = $request->email;
        $User->phone_number = $request->phone_number;
        $User->address = $request->address;
        $User->password = bcrypt($request->password);
        $User->save();
        $login = User::where('id',$User->id)->first();
        Auth::login($login);
        return redirect('homepage');
    }


    public function detailCar($id)
    {
        $car = Car::find($id);

        // if (!empty($car["img_car_lainnya1"])) {
        //     return true;
        // }else{
        //     return false;
        // }
        // return $car["img_car_lainnya1"];
        return view('web.detail',compact('car'));

    }

}
