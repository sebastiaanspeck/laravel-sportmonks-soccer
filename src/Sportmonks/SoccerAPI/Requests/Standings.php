<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Standings
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Standings extends SoccerAPIClient {
    /**
     * @param $seasonId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function bySeasonId($seasonId)
    {
        return $this->callData('standings/season/' . $seasonId);
    }

    /**
     * @param $seasonId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function liveBySeasonId($seasonId)
    {
        return $this->callData('standings/season/live/' . $seasonId);
    }

}
