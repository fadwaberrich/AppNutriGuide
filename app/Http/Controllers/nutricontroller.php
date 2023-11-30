<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nutritionniste;

class nutricontroller extends Controller
{
    public function getnutritionniste(){
        $nutritionniste=nutritionniste::all();
        return view('nutritionniste',['data4'=>$nutritionniste]);
    }
}