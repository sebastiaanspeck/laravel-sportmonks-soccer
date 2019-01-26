<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Healthcheck
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Healthcheck extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function get()
    {
        return $this->call("healthcheck");
    }

}
