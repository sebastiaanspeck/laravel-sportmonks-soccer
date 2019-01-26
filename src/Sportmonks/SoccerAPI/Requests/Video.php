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
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData('highlights/');
    }

    /**
     * @param $fixtureId
     * @return mixed|\StdClass
     */
    public function byFixtureId($fixtureId)
    {
        return $this->callData('highlights/fixture/' . $fixtureId);
    }

}
