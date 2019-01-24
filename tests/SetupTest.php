<?php

use Illuminate\Support\Facades\Config;
use Sportmonks\SoccerAPI\SoccerAPIClient;

/**
 * Class SetupTest
 */
class SetupTest extends TestCase {

    /**
     * @expectedException InvalidArgumentException
     *
     * @test
     */
    public function it_throws_an_exception_if_no_api_token_set()
    {
        Config::set('soccerapi.api_token', '');

        new SoccerAPIClient();
    }

}
