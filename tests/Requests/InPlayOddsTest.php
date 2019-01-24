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

        if(key_exists('data', $response) === false) {
            $this->assertEquals($response->error_message, "Insufficient Privileges! Your current plan doesn't allow access to this section!");
        } else {
            $this->assertNotEmpty($response->data);
        }
    }

}
