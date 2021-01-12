<?php

use App\Http\Controllers\BiereController ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BeerTest extends TestCase
{
    /**
     * test getList
     * 
     * @return void
     */
    public function testGetList()
    {
       
        $res = $this->call('POST','/getlist', ['type'=> 'limonade'])->baseResponse->original ;
        
        $retour = array(0 =>
            array(
                "id"=> 1, 
                "prix" => 3.5, 
                "label" => "limonade myrtille", 
                "path_image" => "12", 
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 
                "resume" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit,", 
                "volume" => 0.33
            )
        );

        $retour = json_encode($retour);
        $res = json_encode($res);
        //Log::info($res.'\n'.$retour );
        $this->assertEquals($res, $retour);
    }
    public function testGetBeer()
    {

        $res = $this->call('POST','/getbeer', ['Id'=> '1'])->baseResponse->original ;
        
        $retour =  array(
            "id"=> 1,
            "label"=> "Sherlock blonde",
            "prix"=> 3.5,
            "premium"=> 1,
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "taux_alcool"=> 4.7,
            "resume"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit,",
            "path_image"=> "..\\..\\assets\\img\\20180913_150905.jpg",
            "volume"=> 0.33,
            "malt"=> "Pilsen bio et caramel Vienne bio",
            "houblon"=> "Barbe rouge et Strisselspalt",
            "IBU"=> 26,
            "oeil"=> "Robe or avec une légère turbidité.",
            "nez"=> "Houblonné et pain",
            "bouche"=> "Goût frais légèrement rond et biscuité",
            "EBC"=> "6-7"
        );
        $retour = json_encode($retour);
        $res = json_encode($res);
        Log::info($res.'\n'.$retour );
        $this->assertEquals($res, $retour);
    }
}
