<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group coach
 */
class CoachTest extends TestCase {

    /**
     * @test
     */
    public function it_retrieves_a_coach_by_id()
    {
        $response = SoccerAPI::coaches()->byId($this->coachId);

        $this->assertEquals($this->coachId, $response->data->coach_id);
    }

}
