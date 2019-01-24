<?php
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * @group commentary
 */
class CommentaryTest extends TestCase {

    /**
     * @test
     */
    public function it_gets_commentaries_by_fixture_id()
    {
        $response = SoccerAPI::commentaries()->byFixtureId($this->fixtureId);

        $this->assertNotEmpty($response->data);
    }

}
