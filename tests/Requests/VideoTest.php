<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group video
 */
class VideoTest extends TestCase {
    
    /**
     * @test
     */
    public function it_retrieves_all_videos()
    {
        $response = SoccerAPI::videos()->all();

        $this->assertNotEmpty($response->data);
    }

    /**
     * @test
     */
    public function it_retrieves_videos_by_fixture_id()
    {
        $response = SoccerAPI::videos()->byFixtureId($this->fixtureId);

        $this->assertNotEmpty($response->data);
    }

}