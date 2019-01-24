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
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function allBySeasonId($seasonId)
    {
        return $this->callData('teams/season/' . $seasonId);
    }

    /**
     * @param $teamId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($teamId)
    {
        return $this->call('teams/' . $teamId);
    }

}
