<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Video extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('highlights/');
    }

    public function byFixtureId($fixtureId)
    {
        return $this->callData('highlights/fixture/' . $fixtureId);
    }

}
