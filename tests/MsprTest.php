<?php

use App\Http\Controllers\MsprController ;
use Illuminate\Http\Request;

class MsprTest extends TestCase
{
    /**
     * test getList
     * 
     * @return void
     */
    public function testGetList()
    {
        $ar = array("uniqueID" => "2","name" => "limonade","value" => "parc limo");
        $ar = array_to_CSV($ar);

        $response = (new MsprController())->getList($ar);

        $retour = array(0 =>
                            array(
                                "uniqueID"=> 2,  
                                "name" => "limonade", 
                                "value" => "parc limo"
                            )
                        );
        $retour = array_to_CSV($retour);

        $this->assertEquals($response, $retour);
    }
    private function array_to_CSV($data)
    {
        $outstream = fopen("php://output", 'r+');
        fputcsv($outstream, $data, ',', '"');
        rewind($outstream);
        $csv = fgets($outstream);
        fclose($outstream);
        return $csv;
    }
}
