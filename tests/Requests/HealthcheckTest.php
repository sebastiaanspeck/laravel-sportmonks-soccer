<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group healthcheck
 */
class HealthcheckTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_healthcheck()
    {
        $response = SoccerAPI::healthcheck()->get();

        $this->assertEquals('Ok!', $response);
    }

}
