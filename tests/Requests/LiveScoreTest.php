<?php

use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group livescore
 */
class LiveScoreTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_livescores_for_today()
    {
        $response = SoccerAPI::livescores()->today();

        $this->assertObjectHasAttribute('data', $response);
    }

    /**
     * @test
     */
    public function it_retrieves_livescores_for_now()
    {
        $response = SoccerAPI::livescores()->now();

        $this->assertObjectHasAttribute('data', $response);
    }
}
