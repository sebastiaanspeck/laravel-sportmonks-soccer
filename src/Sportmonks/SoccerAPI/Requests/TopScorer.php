<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class TopScorer
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class TopScorer extends SoccerAPIClient {
    /**
     * @param $seasonId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function bySeasonId($seasonId)
    {
        return $this->callData('topscorers/season/' . $seasonId);
    }

    /**
     * @param $seasonId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function aggregatedBySeasonId($seasonId)
    {
        return $this->callData('topscorers/season/' . $seasonId . '/aggregated');
    }

}
