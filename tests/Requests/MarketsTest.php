<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;


/**
 * @group bookmaker
 */
class MarketsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_all_markets()
    {
        $response = SoccerAPI::markets()->all();

        $this->assertNotEmpty($response->data);
    }

        /**
     * @test
     */
    public function it_retrieves_markets_without_data()
    {
        $response = SoccerAPI::markets()->all();

        $this->assertArrayHasKey(0, $response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_a_market_by_id()
    {
        $response = SoccerAPI::markets()->byId($this->marketId);

        $this->assertEquals($this->marketId, $response->data->id);
        $this->assertNotNull($response->data->name);
    }

}
