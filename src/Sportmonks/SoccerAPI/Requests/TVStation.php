<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class TVStation
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class TVStation extends SoccerAPIClient {
    /**
     * @param $fixtureId
     * @return mixed|\StdClass
     */
    public function byFixtureId($fixtureId)
    {
        return $this->call('tvstations/fixture/' . $fixtureId);
    }
}
