<?php

use Carbon\Carbon;
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group live-score
 */
class FixtureTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_carbon()
    {
        $fromDate = Carbon::createFromDate(2019, 1, 19);
        $toDate = Carbon::createFromDate(2019, 1, 19);
        $response = SoccerAPI::fixtures()->betweenDates($fromDate,$toDate);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_string()
    {
        $fromDate = '2019-01-19';
        $toDate = '2019-01-19';
        $response = SoccerAPI::fixtures()->betweenDates($fromDate,$toDate);

        $this->assertNotEmpty($response->data);
    }

    /**
    * @test
    */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_carbon_by_team_id()
    {
        $fromDate = Carbon::createFromDate(2019, 1, 19);
        $toDate = Carbon::createFromDate(2019, 1, 19);

        $response = SoccerAPI::fixtures()->betweenDatesByTeamId($fromDate, $toDate, $this->teamId);

        foreach($response->data as $fixture) {
            if($this->assertEquals($fixture->localteam_id, $this->teamId) === false) {
                $this->assertEquals($fixture->visitorteam_id, $this->teamId);
            }
        }

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_range_using_string_by_team_id()
    {
        $fromDate = '2019-01-19';
        $toDate = '2019-01-19';

        $response = SoccerAPI::fixtures()->betweenDatesByTeamId($fromDate, $toDate, $this->teamId);

        foreach($response->data as $fixture) {
            if($this->assertEquals($fixture->localteam_id, $this->teamId) === false) {
                $this->assertEquals($fixture->visitorteam_id, $this->teamId);
            } else {
                $this->assertEquals($fixture->localteam_id, $this->teamId);
            }
        }

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_using_carbon()
    {
        $date = Carbon::createFromDate(2019, 1, 19);
        $response = SoccerAPI::fixtures()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_for_a_specific_date_using_string()
    {
        $date = '2019-01-19';
        $response = SoccerAPI::fixtures()->byDate($date);

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_fixture_by_fixture_id()
    {
        $response = SoccerAPI::fixtures()->byFixtureId($this->fixtureId);

        $this->assertEquals($this->fixtureId, $response->data->id);
    }

    /**
     * @test
     */
    public function it_retrieves_fixtures_by_multiple_fixture_ids()
    {
        $response = SoccerAPI::fixtures()->byMultipleFixtureIds($this->multipleFixtureIds);

        foreach($response->data as $fixture) {
            $this->assertContains($fixture->id, $this->multipleFixtureIds);
        }
    }
}
