<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactcontroller extends Controller
{
    public function getcontact(){
        $contact=contact::all();
        return view('liste-contact',['data5'=>$contact]);
    }
}
