<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\nutritionniste;

class notificationcontroller extends Controller
{
    public function notif(){

    $reservations=reservation::all(); 
    $last_reservation=reservation::orderBy('id','desc')->latest()->first();
         return view('accueil',compact('last_reservation','reservations'));
    }
}
