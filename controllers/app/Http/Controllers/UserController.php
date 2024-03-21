<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all();
        // $users = User::where("age", ">=", 18)
        //     ->where("zip_code", 15311);

        // $users = User::where("age", "==", 18);
        // $users = User::where("age", "!=", 18);
        // $users = User::where("age", "<", 18);
        // $users = User::where("age", "LIKE", 18);

        // OR 
        // $users = User::where("age", ">=", 30)
        //     ->orWhere("zip_code", 15311);

        // ordenar = 'asc' 'desc'
        // $users = User::where("age", ">=", 30)
        //     ->orWhere("zip_code", 15311)
        //     ->orderBy("age", "asc")->get();

        // limit = limit(get,skip|offset);
        // $users = User::where("age", ">=", 30)->limit(2)->get();

        // obtener el primero
        // $users = User::where("age", ">=", 30)->first();

        // buscar uno por su id
        // $users = User::find(1);

        // buscar uno y si no lo encuentra lanza un error
        // $users = User::findOrFail(1);


        // Usando sql
        // $users = DB::table("users")->select(DB::raw("*"))->where("age", "=", 32)->get();
        $users = User::all();
        return view("users.index", compact("users"));
    }

    public function create()
    {
        $user = new User;
        $user->name = "JuanJo";
        $user->email = "demo2@demo.com";
        $user->password = Hash::make("123456");
        $user->age = 25;
        $user->address = "Calle demostracion";
        $user->zip_code = 15311;
        $user->save();

        User::create([
            "name" => "Ruiz",
            "email" => "inf2o@demo.com",
            "password" => Hash::make("12345678"),
            "age" => 42,
            "address" => "Av Pruebas 17",
            "zip_code" => 123456
        ]);

        User::create([
            "name" => "Alejando",
            "email" => "info3@demo.com",
            "password" => Hash::make("12345678"),
            "age" => 23,
            "address" => "Av Pruebas 3",
            "zip_code" => 123456
        ]);
        return redirect()->route("user.index");
    }
}
