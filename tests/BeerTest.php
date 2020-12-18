<?php

class BeerTest extends TestCase
{
    /**
     * test getList
     * 
     * @return void
     */
    public function testGetList()
    {
        $ar = array("type" => "limonade");
        json_encode($ar);

        $response = (new BiereController())->getList($ar);

        $retour = array(0 =>
                            array(
                                "id"=> 1, 
                                "prix" => 3.5, 
                                "label" => "limonade myrtille", 
                                "path_image" => 12, 
                                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing...", 
                                "resume" => "Lorem ipsum dolor sit amet, consectetur adipiscing...", 
                                "volume" => 0.33
                            )
                        );
        $retour = json_encode($retour);

        $this->assertEquals($response, $retour);
    }
}
