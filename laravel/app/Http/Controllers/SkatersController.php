<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkatersController extends Controller
{
    public function test(){
        $skaters = new \App\Registration();
        $skaters->firstname = 'Ticho';
        $skaters->middlename = 'Ticho';
        $skaters->lastname = 'Ticho';
        $skaters->username = 'Ticho';
        $skaters->password = 'Ticho';
        $skaters->skater = true;
        $skaters->skates = 'Skateboard';
        $skaters->email = 'Skateboard@gmail.com';
        $skaters->geboortedatum = '2000-10-31';


        $skaters->save();
    }
}
