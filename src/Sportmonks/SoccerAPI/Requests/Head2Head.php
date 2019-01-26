<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Head2Head
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Head2Head extends SoccerAPIClient {
    /**
     * @param $team1Id
     * @param $team2Id
     * @return mixed|\StdClass
     */
    public function betweenTeams($team1Id,$team2Id)
    {
        return $this->callData('head2head/' . $team1Id . '/' . $team2Id);
    }

}
