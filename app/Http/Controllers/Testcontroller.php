<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index(){
        $reservations = DB::select('select * from reservations');
        dd($reservations);
    }
}
