<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group inplayodds
 */
class InPlayOddsTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_in_play_odds_by_fixture_id()
    {
        $response = SoccerAPI::inplayodds()->byFixtureId($this->fixtureId);

        $this->assertObjectHasAttribute('data', $response);
    }

}
