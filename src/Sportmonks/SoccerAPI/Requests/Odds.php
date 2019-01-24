<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Odds extends SoccerAPIClient {

    public function byFixtureId($fixtureId)
    {
        return $this->callData('odds/fixture/' . $fixtureId);
    }

    public function byFixtureAndBookmakerId($fixtureId, $bookmakerId)
    {
        return $this->callData('odds/fixture/' . $fixtureId . '/bookmaker/' . $bookmakerId);
    }

    public function inplayByFixtureId($fixtureId)
    {

        return $this->callData('odds/inplay/fixture/' . $fixtureId);
    }

}
