<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nutritionniste;

class nutritionnistecontroller extends Controller
{
    public function getnutritionniste(){
        $nutritionniste=nutritionniste::all();
        return view('liste-nutritionniste',['data4'=>$nutritionniste]);
    }

    public function deletenutritionniste($id){
        $nutritionniste=nutritionniste::find($id);
        $nutritionniste->delete();
        return redirect('/liste-nutritionniste')->with('message2','Le\La nutritionniste '.$nutritionniste->nom.' a été bien supprimé');
    }
    
    public function ajoutnutritionniste(Request $req){
        $req->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'age' => 'required|numeric',
            'local' => 'required',
            'telephone' =>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'email' => 'required|email',
            'qualif' => 'required',
            'image' => 'required',
            ]);
        $nutritionniste = new nutritionniste;
        $nutritionniste->nom=$req->nom;
        $nutritionniste->prenom=$req->prenom;
        $nutritionniste->age=$req->age;
        $nutritionniste->local=$req->local;
        $nutritionniste->telephone=$req->telephone;
        $nutritionniste->email=$req->email;
        $nutritionniste->qualif=$req->qualif;
        $nutritionniste->image=$req->image;
        $nutritionniste->save();
        return redirect('/liste-nutritionniste')->with('message1','Le\La nutritionniste '.$nutritionniste->nom.' a été bien ajouté');
    }

    public function getnutritionnisteid($id){
        $nutritionniste = nutritionniste::find($id);
        return view('modifier-nutritionniste',['data4'=>$nutritionniste]);
    }
    public function updatenutritionniste(Request $req){
        $nutritionniste=nutritionniste::find($req->id);
        $nutritionniste->nom=$req->nom;
        $nutritionniste->prenom=$req->prenom;
        $nutritionniste->age=$req->age;
        $nutritionniste->local=$req->local;
        $nutritionniste->telephone=$req->telephone;
        $nutritionniste->email=$req->email;
        $nutritionniste->qualif=$req->qualif;
        $nutritionniste->image=$req->image;
        $nutritionniste->save();
        return redirect('/liste-nutritionniste')->with('message0','Le\La nutritionniste '.$nutritionniste->nom.' a été bien modifié');

    }
}
