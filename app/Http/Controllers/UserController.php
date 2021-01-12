<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller{

    public function register(Request $request){
        $req = $request->all();
        $db = app('db')->connection('mysql');
        $res = $db->insert("INSERT INTO user (`admin`, `naissance`, `lastname`, `firstname`, `tel`, `password`, `email`) 
            VALUES (0, :naissance, :lastname, :firstname, :tel, :password, :email );",[
                "naissance" => $req['naissance'],
                "lastname" => $req['lastname'],
                "firstname" => $req['firstname'],
                "tel" => $req['phone'],
                "password" => $req['password'],
                "email" => $req['email']
            ]);
        return response()->json($res, 200);
    }

}
