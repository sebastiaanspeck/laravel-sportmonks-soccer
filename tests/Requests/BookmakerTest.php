<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

//TODO: not supported yet, check when it will be implemented by sportmonks
/**
 * @group bookmaker
 */
class BookmakerTest extends TestCase {

    /**
     * @test
     */
//    public function it_retrieves_all_bookmakers()
//    {
//        $response = SoccerAPI::bookmakers()->all();
//
//        $this->assertNotEmpty($response->data);
//    }
    /**
     * @test
     */
    public function it_retrieves_a_bookmaker_by_id()
    {
        $response = SoccerAPI::bookmakers()->byId($this->bookmakerId);

        $this->assertEquals($this->bookmakerId, $response->data->id);
    }

}
