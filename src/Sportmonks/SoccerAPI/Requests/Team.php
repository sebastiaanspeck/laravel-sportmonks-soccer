<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Team
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Team extends SoccerAPIClient {
    /**
     * @param $seasonId
     * @return mixed|\StdClass
     */
    public function allBySeasonId($seasonId)
    {
        return $this->callData("teams/season/{$seasonId}");
    }

    /**
     * @param $teamId
     * @return mixed|\StdClass
     */
    public function byId($teamId)
    {
        return $this->call("teams/{$teamId}");
    }

}
