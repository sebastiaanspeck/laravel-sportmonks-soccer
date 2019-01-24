<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Player
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Player extends SoccerAPIClient {
    /**
     * @param $playerId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($playerId)
    {
        return $this->callData('players/' . $playerId);
    }

}
