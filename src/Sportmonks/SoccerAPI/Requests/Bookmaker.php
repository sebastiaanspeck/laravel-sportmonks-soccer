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
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData('bookmakers');
    }

    /**
     * @param $bookmakerId
     * @return mixed|\StdClass
     */
    public function byId($bookmakerId)
    {
        return $this->callData("bookmakers/{$bookmakerId}");
    }

}
