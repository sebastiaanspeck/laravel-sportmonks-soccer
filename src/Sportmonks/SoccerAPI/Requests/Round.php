<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Round
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Round extends SoccerAPIClient {
    /**
     * @param $roundId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($roundId)
    {
        return $this->call('rounds/' . $roundId);
    }

    /**
     * @param $seasonId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function bySeasonId($seasonId)
    {
        return $this->call('rounds/season/' . $seasonId);
    }

}
