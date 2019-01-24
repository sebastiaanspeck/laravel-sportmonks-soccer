<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group odds
 */
class OddsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_odds_by_fixture_id()
    {
        $response = SoccerAPI::odds()->byFixtureId($this->fixtureId);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_odds_by_fixture_and_bookmaker_id()
    {
        $response = SoccerAPI::odds()->byFixtureAndBookmakerId($this->fixtureId, $this->bookmakerId);

        $this->assertNotEmpty($response->data);
    }

}