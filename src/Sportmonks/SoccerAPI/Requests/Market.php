<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Market
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Market extends SoccerAPIClient {
    /**
     * @return mixed|\StdClass
     */
    public function all()
    {
        return $this->callData('markets');
    }

    /**
     * @param $marketsId
     * @return mixed|\StdClass
     */
    public function byId($marketsId)
    {
        return $this->call('markets/' . $marketsId);
    }

}
