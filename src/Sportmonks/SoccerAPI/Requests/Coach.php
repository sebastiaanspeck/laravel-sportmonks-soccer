<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Coach
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Coach extends SoccerAPIClient {
    /**
     * @param $coachId
     * @return mixed|\StdClass
     */
    public function byId($coachId)
    {
        return $this->callData("coaches/{$coachId}");
    }

}
