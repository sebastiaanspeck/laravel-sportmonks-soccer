<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class League
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class League extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData("leagues");
    }

    /**
     * @param $competitionId
     * @return mixed|\StdClass
     */
    public function byId($competitionId)
    {
        return $this->call("leagues/{$competitionId}");
    }

}
