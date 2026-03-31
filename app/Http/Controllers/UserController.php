<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $req)
    {
        $users = User::all();
        return view("users.list", compact("users"));
    }

    public function createForm(Request $req)
    {
        return view("users.add");
    }

    public function create(Request $req)
    {
        $req->validate([
            "email" => ["email", "required", "unique:users"],
            "sexe" => ["max:1", "min:1", "required"],
            "nom" => ["max:50"],
            "prenom" => ["max:50", "required"],
            "date_naissance" => ["date"]
        ]);

        $user = $req->all();
        $user["role_id"] = 2;
        User::create($user);
        return redirect("/")->with("success", "Un utilisateur créé avec succès");
    }

    public function edit(Request $req)
    {
        $user_id = $req->input("user_id");

        $req->validate([
            "email" => ["email"],
            "sexe" => ["max:1", "min:1"],
            "nom" => ["max:50"],
            "prenom" => ["max:50"],
            "date_naissance" => ["date"]
        ]);

        $user = [
            "email" => $req->input("email"),
            "sexe" => $req->input("sexe"),
            "nom" => $req->input("nom"),
            "prenom" => $req->input("prenom"),
            "date_naissance" => $req->input("date_naissance"),
        ];

        User::whereId($user_id)->update($user);
        return redirect("/")->with("success", "Utilisateur #$user_id modifié avec succès");
    }

    public function editForm(Request $req,int $id){
        $user = User::find($id);
        return view("users.edit", compact("user"));
    }

    public function delete(Request $req, int $user_id)
    {
        User::whereId($user_id)->delete(); 
        return redirect()->back()->with("success", "Un utilisateur vient d'être supprimé");
    }
}
