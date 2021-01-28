<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BiereController extends Controller
{
    public function getList(Request $request){
        $req = $request->all();
        //var_dump($request);die;
        switch ($req['type']) {
            case 'premium':
                $db = app('db')->connection('mysql');
                $res = $db->select("SELECT * FROM biere WHERE premium = 1");
                Log::info(json_encode($res));
                return response()->json($res, 200);
                break;
            
            case 'grandedistribution':
                $db = app('db')->connection('mysql');
                $res = $db->select("SELECT * FROM biere WHERE premium = 0");
                return response()->json($res, 200);
                break;
            case 'limonade':
                $db = app('db')->connection('mysql');
                $res = $db->select("SELECT * FROM limonade");
                return response()->json($res, 200);
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
    public function getBeer(Request $request){
        $req = $request->all();
        $db = app('db')->connection('mysql');
        $res = $db->select("SELECT * FROM biere WHERE ID = :id ",['id' => $req['Id']] );
        if (isset($res[0])) {
            return response()->json($res[0], 200);
        }else{
            return response()->json(
                array(
                    "error" => true,
                    "description" => "bière introuvable",
                ), 400
            );
        }
    }

}
