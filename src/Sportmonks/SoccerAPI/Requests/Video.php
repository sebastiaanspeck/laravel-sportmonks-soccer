<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Video
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Video extends SoccerAPIClient {
    /**
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function all()
    {
        return $this->callData('highlights/');
    }

    /**
     * @param $fixtureId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($fixtureId)
    {
        return $this->callData('highlights/fixture/' . $fixtureId);
    }

}
