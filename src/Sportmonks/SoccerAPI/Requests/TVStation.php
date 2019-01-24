<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class TVStation extends SoccerAPIClient {

    public function byFixtureId($fixtureId)
    {
        return $this->call('tvstations/fixture/' . $fixtureId);
    }
}