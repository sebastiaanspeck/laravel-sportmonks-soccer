<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Bookmaker
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Bookmaker extends SoccerAPIClient {
    /**
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function all()
    {
        return $this->callData('bookmakers');
    }

    /**
     * @param $bookmakerId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($bookmakerId)
    {
        return $this->callData("bookmakers/{$bookmakerId}");
    }

}
