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
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function today()
    {
        return $this->callData('livescores');
    }

    /**
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function now()
    {
        return $this->callData('livescores/now');
    }

}
