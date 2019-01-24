<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group tvstation
 */
class TVStationTest extends TestCase {
    

    /**
     * @test
     */
    public function it_retrieves_tvstations_by_fixture_id()
    {
        $response = SoccerAPI::tvstations()->byFixtureId($this->fixtureId);

        $this->assertNotEmpty($response->data);
    }

}
