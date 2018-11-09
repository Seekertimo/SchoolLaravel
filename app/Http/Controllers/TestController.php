<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $bananen = \DB::table('drivers')->get();
        dd($bananen);

        /*$bestDriver = \DB::table('drivers')
            ->orderBy('total_points', 'desc')
            ->get();
        */

       /* $result = \DB::('drivers')->insert(
            [
                'team' => 'Mercedes',
                'firstname' => 'Lois',
                'lastname' => 'Hamilton',
                'total_points' => 555,
                'birthdate' => '1976-12-31'
            ]
        );*/


        $deleteditems = \DB::table('drivers')->where('id', '>=', 5)->delete();
        dd($deleteditems);


    }
}