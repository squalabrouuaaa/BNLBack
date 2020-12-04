<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiereController extends Controller
{
    public function getList(Request $request){
        switch ($req['type']) {
            case 'Premium':
                $req = $request->all();
                $db = app('db')->connection('mysql');
                $res = $db->select("SELECT * FROM biere WHERE premium = true");
                return response()->json($res, 200);
                break;
            
            case 'GDB':
                # code...
                break;
            case 'limonade':
                # code...
                break;
            default:
                return response()->json(
                    array(
                        "error" => true,
                        "description" => "liste introuvable",
                    ), 400
                );
                break;
        }
        
    }
}
