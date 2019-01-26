<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Season
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Season extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData('seasons');
    }

    /**
     * @param $seasonId
     * @return mixed|\StdClass
     */
    public function byId($seasonId)
    {
        return $this->call('seasons/' . $seasonId);
    }
}
