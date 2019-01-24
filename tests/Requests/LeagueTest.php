<?php

use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group league
 */
class LeagueTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_leagues()
    {
        $response = SoccerAPI::leagues()->all();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_leagues_without_data()
    {
        $response = SoccerAPI::leagues()->all();

        $this->assertArrayHasKey(0, $response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_a_league_by_id()
    {
        $response = SoccerAPI::leagues()->byId($this->leagueId);

        $this->assertEquals($this->leagueId, $response->data->id);
        $this->assertNotNull($response->data->name);
    }

}
