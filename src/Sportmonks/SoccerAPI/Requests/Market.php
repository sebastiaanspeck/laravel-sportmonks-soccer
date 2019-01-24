<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Markets
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Markets extends SoccerAPIClient {
    /**
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function all()
    {
        return $this->callData('markets');
    }

    /**
     * @param $marketsId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($marketsId)
    {
        return $this->call('markets/' . $marketsId);
    }

}
