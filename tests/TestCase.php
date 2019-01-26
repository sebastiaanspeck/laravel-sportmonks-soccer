<?php

use Illuminate\Support\Facades\Config;
use Sportmonks\SoccerAPI\SoccerAPIServiceProvider;

/**
 * Class TestCase
 */
abstract class TestCase extends Illuminate\Foundation\Testing\TestCase {

    protected $fixtureId, $multipleFixtureIds, $leagueId, $seasonId, $roundId, $venueId, $refereeId, $teamId, $firstTeamId, $secondTeamId,
        $coachId, $playerId, $continentId, $countryId, $bookmakerId, $marketId;

    /**
     * setup
     */
    public function setUp()
    {
        parent::setup();

        // Be sure that the SPORTMONKS_API_TOKEN in the .env-file is correct
        Config::set('soccerapi.api_token', env('SPORTMONKS_API_TOKEN'));

        // Usable with an English Premier League plan
        $this->fixtureId = 10332982;
        $this->multipleFixtureIds = [10332982, 10332956];
        $this->leagueId = 8;
        $this->seasonId = 12962;
        $this->roundId = 147728;
        $this->venueId = 204;
        $this->refereeId = 14532;
        $this->teamId = 19;
        $this->firstTeamId = 19;
        $this->secondTeamId = 18;
        $this->coachId = 455907;
        $this->playerId = 31739;

        $this->continentId = 1;
        $this->countryId = 462;
        $this->bookmakerId = 150;
        $this->marketId = 1;
    }

    /**
     * Boots the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../vendor/laravel/laravel/bootstrap/app.php';

        $app->register(SoccerAPIServiceProvider::class);

        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
        
        if (file_exists(dirname(__DIR__) . '/.env')) {
            (new \Dotenv\Dotenv(dirname(__DIR__), '.env'))->load();
        }

        return $app;
    }
}
