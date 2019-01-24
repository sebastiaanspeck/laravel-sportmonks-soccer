<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class InPlayOdds
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class InPlayOdds extends SoccerAPIClient
{
    /**
     * @param $fixtureId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($fixtureId)
    {

        return $this->callData('odds/inplay/fixture/' . $fixtureId);
    }
}
