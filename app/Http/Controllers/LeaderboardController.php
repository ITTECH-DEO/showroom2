<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Leaderboard;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LeaderboardController extends Controller
{
    public function index(){
        $user = User::where("role", "=", "marketing")->get();
        // return $user;
        $car = Car::where("status_id","=","1")->get();

       
        // $car=  Car::whereHas('transaction', function ($query) {
        //     return $query->where('status_transaction', '!=', "agree");
        // })->get();

        // return $car;

        return view("leaderboard.index",["user"=>$user,"cars"=>$car]);
    }

    public function input(Request $request)
    {
        // return $request;
        $data = new Leaderboard();
        $data->car_id = $request->car_id;
        $data->user_id = $request->user_id;
        $data->created_at = Carbon::now();
        $data->updated_at = Carbon::now();
        $data->save();

        $car = Car::where("id", "=", $request->car_id)->first();
        $car->status_id = 2;
        $car->save();

        return Redirect::back()->with('success', 'Mobil Berhasil Terjual ');;
    }

    public function marketing_index(){

        $result = User::where('role', 'marketing')->with([
            'leaderboards'
        ])->withCount('leaderboards')->orderBy('leaderboards_count', 'ASC')->get();
        // leaderboards_count
        // ->map(functi$user) {
        //     return [
        //         'name' => $user->name,
        //         'qty' => $user->leaderboards->count()
        //     ];
        // });
        // $results = usort( $result->toArray(), function ($a, $b) {
        //     return $a['qty'] - $b['qty'];
        // });
        // dd($result);s
        // $results = Leaderboard::withCount('participants')->orderBy('participants_count', 'desc')->paginate(10);
        
        // $results = Leaderboard::join('user', 'user.id', '=', 'leaderboards.user_id')
        // // ->select('user.*')
        // ->orderBy(\DB::raw('count(*) as user_id'), 'desc')
        // ->get();
        // return $results;
        return view("leaderboard.marketing", compact('result'));
    }
    
}
