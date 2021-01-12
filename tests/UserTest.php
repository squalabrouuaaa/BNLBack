<?php

use App\Http\Controllers\BiereController ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserTest extends TestCase
{
    /**
     * test getList
     * 
     * @return void
     */
    public function testregister(){
        $newUser = array(
            "naissance" => 998546,
            "lastname" => "test",
            "firstname" => "unitaire",
            "phone" => "06.66.66.66.66",
            "password" => "saucisson",
            "email" => "test@test.com"
        );
        $res = $this->call('POST','/register', $newUser)->baseResponse->original ;
        if($res) {
            $db = app('db')->connection('mysql');
            $bddUser = $db->select("SELECT * FROM user WHERE lastname = :lastname AND firstname = :firstname",
            [ 
                'lastname' => 'test',
                'firstname' => 'unitaire'
            ]);
            $returnUser =  array(
                "naissance" =>  $bddUser[0]->naissance,
                "lastname" =>   $bddUser[0]->lastname,
                "firstname" =>  $bddUser[0]->firstname,
                "phone" =>        $bddUser[0]->tel,
                "password" =>   $bddUser[0]->password,
                "email" =>      $bddUser[0]->email
            ); 
            $db->delete("DELETE FROM user WHERE id = :id ", ['id'=> $bddUser[0]->id] );
        }
        $this->assertEquals($newUser, $returnUser);
    }
}