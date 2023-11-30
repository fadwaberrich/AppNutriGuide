<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;

class reservationcontroller extends Controller
{
    public function getviewrdv($id){
        return view('details',compact('id'));
            }
            public function ajoutreservation(Request $req){
                $res=reservation::where('jour','=',$req->jour)->where('heure','=',$req->heure)->where('nutritionniste_id','=',$req->nutri_id)->first();
               if ($res) {
                return redirect()->back()->with('message1','Le rendez-vous existe déja');
               }
               else{
                $reservation = new reservation;
                $reservation->jour=$req->jour;
                $reservation->heure=$req->heure;
                $reservation->nutritionniste_id=$req->nutri_id;
                $reservation->save();
                return redirect()->back()->with('message1','Le rendez-vous a été bien reservé');
               }
            }
        
            public function getreservation(){
                $reservation=reservation::all();
                return view('liste-reserv',['data6'=>$reservation]);
            }
}
