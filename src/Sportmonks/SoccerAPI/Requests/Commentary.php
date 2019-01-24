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
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($fixtureId)
    {
        return $this->callData("commentaries/fixture/{$fixtureId}");
    }

}
