<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Squad
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Squad extends SoccerAPIClient {
    /**
     * @param $teamId
     * @param $seasonId
     * @return mixed|\StdClass
     */
    public function byTeamAndSeasonId($teamId, $seasonId)
    {
        return $this->callData("squad/season/{$seasonId}/team/{$teamId}");
    }

}
