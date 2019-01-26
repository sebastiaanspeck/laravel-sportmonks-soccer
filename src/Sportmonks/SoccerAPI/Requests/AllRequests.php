<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class PossibleRequests
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class AllRequests extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function get()
    {
        return $this->call("");
    }

}
