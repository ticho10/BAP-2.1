<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(){
        $drivers = \DB::table('drivers')->get();

//        $bestDriverExists = \DB::table('drivers')
//            ->where('total_points', '>', 222)
//            ->exists();

        $drivers = \DB::table('drivers')
            ->orderBy('total_points', 'desc')
            ->get();

//        $result = \DB::table('drivers')->insert(
//            ['team' => 'Mercedes', 'firstname' => 'Louise' , 'lastname' => 'Hamilton' , 'total_points' => 555 , 'birthdate' => '1976-12-31']
//        );



//         $deleteDrivers = \DB::table('drivers')
//             ->where('id', '>', 2)
//             ->delete();
        dd($drivers);
    }
}
