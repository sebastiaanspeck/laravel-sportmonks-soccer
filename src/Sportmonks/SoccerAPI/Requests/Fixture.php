<?php

namespace Sportmonks\SoccerAPI\Requests;

use Carbon\Carbon;
use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class Fixture
 *
 * @package Sportmonks\SoccerAPI\Requests
 */
class Fixture extends SoccerAPIClient {
    /**
     * @param $fromDate
     * @param $toDate
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function betweenDates($fromDate,$toDate)
    {
        if($fromDate instanceof Carbon)
        {
            $fromDate = $fromDate->format('Y-m-d');
        }

        if($toDate instanceof Carbon)
        {
            $toDate = $toDate->format('Y-m-d');
        }

        return $this->callData('fixtures/between/' . $fromDate . '/' .$toDate);
    }

    /**
     * @param $date
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byDate($date)
    {
        if($date instanceof Carbon)
        {
            $date = $date->format('Y-m-d');
        }

        return $this->callData('fixtures/date/' . $date);
    }

    /**
     * @param $id
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($id)
    {
        return $this->call('fixtures/' . $id);
    }

    /**
     * @param $array
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byMultipleFixtureIds($array)
    {
        return $this->call('fixtures/multi/' . join(',', $array));
    }

    /**
     * @param $firstTeamId
     * @param $secondTeamId
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function headToHead($firstTeamId,$secondTeamId)
    {
        return $this->call('head2head/' . $firstTeamId . '/' . $secondTeamId);
    }

}
