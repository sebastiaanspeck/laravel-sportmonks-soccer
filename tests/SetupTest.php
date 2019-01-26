<?php

use Illuminate\Support\Facades\Config;
use Sportmonks\SoccerAPI\SoccerAPIClient;
use Sportmonks\SoccerAPI\Facades\SoccerAPI;

/**
 * Class SetupTest
 */
class SetupTest extends TestCase {

    /**
     *
     * @test
     */
    public function it_throws_an_exception_if_no_api_token_set()
    {
        $this->expectException(InvalidArgumentException::class);

        Config::set('soccerapi.api_token', '');
        new SoccerAPIClient();
    }

    /**
     *
     * @test
     */
    public function it_thows_an_unauthenticated_error()
    {
        Config::set('soccerapi.api_token', 'API_TOKEN');

        $response = SoccerAPI::allrequests()->get();

        $this->assertObjectHasAttribute('error_code', $response);
        $this->assertEquals(401, $response->error_code);
    }
}
