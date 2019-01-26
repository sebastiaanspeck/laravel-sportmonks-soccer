<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Commentary
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Commentary extends SoccerAPIClient {
    /**
     * @param $fixtureId
     * @return mixed|\StdClass
     */
    public function byFixtureId($fixtureId)
    {
        return $this->callData("commentaries/fixture/{$fixtureId}");
    }

}
