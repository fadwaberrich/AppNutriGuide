<?php

// admincontroller.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class admincontroller extends Controller
{
    public function getadmin(){
        // Retrieve only users with the role 'admin'
        $adminUsers = User::where('role', User::ROLE_ADMIN)->get();

        return view('liste-admin', ['data1' => $adminUsers]);
    }

    public function deleteadmin($id){
        // Retrieve and delete only users with the role 'admin'
        $admin = User::where('id', $id)->where('role', User::ROLE_ADMIN)->first();

        if ($admin) {
            $admin->delete();
            return redirect('/liste-admin')->with('message2', 'L\'admin ' . $admin->name . ' a été bien supprimé');
        } else {
            abort(404, 'Admin not found');
        }
    }

    public function ajoutadmin(Request $req){
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Create a new user with the role 'admin'
        $admin = new User;
        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->password = $req->password;
        $admin->role = User::ROLE_ADMIN; // Set the role to 'admin'
        $admin->save();

        return redirect('/liste-admin')->with('message1', 'L\'admin ' . $admin->name . ' a été bien ajouté');
    }

    public function getadminid($id){
        // Retrieve only users with the role 'admin'
        $admin = User::where('id', $id)->where('role', User::ROLE_ADMIN)->first();

        if ($admin) {
            return view('modifier-admin', ['data' => $admin]);
        } else {
            abort(404, 'Admin not found');
        }
    }

    public function updateadmin(Request $req){
        $admin = User::find($req->id);
        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->password = $req->password;
        $admin->save();

        return redirect('/liste-admin')->with('message0', 'L\'admin ' . $admin->name . ' a été bien modifié');
    }
}
