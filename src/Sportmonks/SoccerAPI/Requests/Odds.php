<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Odds
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Odds extends SoccerAPIClient {
    /**
     * @param $fixtureId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($fixtureId)
    {
        return $this->callData('odds/fixture/' . $fixtureId);
    }

    /**
     * @param $fixtureId
     * @param $bookmakerId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureAndBookmakerId($fixtureId, $bookmakerId)
    {
        return $this->callData('odds/fixture/' . $fixtureId . '/bookmaker/' . $bookmakerId);
    }

    /**
     * @param $fixtureId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function inplayByFixtureId($fixtureId)
    {

        return $this->callData('odds/inplay/fixture/' . $fixtureId);
    }

}
