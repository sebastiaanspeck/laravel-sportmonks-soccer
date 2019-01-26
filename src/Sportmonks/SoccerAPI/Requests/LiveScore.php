<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class LiveScore
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class LiveScore extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function today()
    {
        return $this->callData('livescores');
    }

    /**
     * @return mixed|\StdClass
     */
    public function now()
    {
        return $this->callData('livescores/now');
    }

}
