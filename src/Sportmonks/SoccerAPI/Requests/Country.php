<?php

namespace Sportmonks\SoccerAPI\Requests;


use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Country
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Country extends SoccerAPIClient {
    /**
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function all()
    {
        return $this->callData('countries');
    }

    /**
     * @param $countryId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byId($countryId)
    {
        return $this->call('countries/' . $countryId);
    }

}
