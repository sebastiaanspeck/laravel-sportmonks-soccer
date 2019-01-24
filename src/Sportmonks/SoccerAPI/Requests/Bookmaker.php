<?php

namespace Sportmonks\SoccerAPI\Requests;

use Sportmonks\SoccerAPI\SoccerAPIClient;

class Bookmaker extends SoccerAPIClient {

    public function all()
    {
        return $this->callData('bookmakers');
    }

    public function byId($bookmakerId)
    {
        return $this->callData("bookmakers/{$bookmakerId}");
    }

}
