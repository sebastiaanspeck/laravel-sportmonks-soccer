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
    public function betweenDates($fromDate, $toDate)
    {
        $fromDate = $this->convertDate($fromDate);
        $toDate = $this->convertDate($toDate);

        return $this->callData("fixtures/between/{$fromDate}/{$toDate}");
    }

    public function betweenDatesByTeamId($fromDate, $toDate, $teamId)
    {
        $fromDate = $this->convertDate($fromDate);
        $toDate = $this->convertDate($toDate);

        return $this->callData("fixtures/between/{$fromDate}/{$toDate}/{$teamId}");
    }

    /**
     * @param $date
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byDate($date)
    {
        $date = $this->convertDate($date);

        return $this->callData("fixtures/date/{$date}");
    }

    /**
     * @param $id
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byFixtureId($id)
    {
        return $this->call("fixtures/{$id}");
    }

    /**
     * @param $array
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    public function byMultipleFixtureIds($array)
    {
        $fixture_ids = join(',', $array);
        return $this->call("fixtures/multi/{$fixture_ids}");
    }

    private function convertDate($date)
    {
        if($date instanceof Carbon)
        {
            return $date->format('Y-m-d');
        }

        return $date;
    }

}
