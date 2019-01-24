<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Commentary extends SoccerAPIClient {

    public function byFixtureId($fixtureId)
    {
        return $this->callData("commentaries/fixture/{$fixtureId}");
    }

}