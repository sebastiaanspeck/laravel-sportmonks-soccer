<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Venue
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Venue extends SoccerAPIClient {
    /**
     * @param $venueId
     * @return mixed|\StdClass
     */
    public function byId($venueId)
    {
        return $this->call('venues/' . $venueId);
    }

    /**
     * @param $seasonId
     * @return mixed|\StdClass
     */
    public function bySeasonId($seasonId)
    {
        return $this->call('venues/season/' . $seasonId);
    }

}
