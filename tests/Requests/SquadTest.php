<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group squad
 */
class SquadTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_a_squad_by_team_and_season_id()
    {
        $response = SoccerAPI::squads()->byTeamAndSeasonId($this->teamId, $this->seasonId);

        $this->assertNotEmpty($response->data);
    }

}
