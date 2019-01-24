<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group bookmaker
 */
class BookmakerTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_bookmakers()
    {
        $response = SoccerAPI::bookmakers()->all();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_a_bookmaker_by_id()
    {
        $response = SoccerAPI::bookmakers()->byId($this->bookmakerId);

        $this->assertEquals($this->bookmakerId, $response->data->id);
    }

}
