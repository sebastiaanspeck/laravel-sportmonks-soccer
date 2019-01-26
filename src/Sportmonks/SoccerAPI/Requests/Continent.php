<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Continent
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Continent extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData("continents/");
    }

    /**
     * @param $continentId
     * @return mixed|\StdClass
     */
    public function byId($continentId)
    {
        return $this->call("continents/{$continentId}");
    }

}
