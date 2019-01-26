<?php

namespace Sportmonks\SoccerAPI;

use Sportmonks\SoccerAPI\Requests\Bookmaker;
use Sportmonks\SoccerAPI\Requests\InPlayOdds;
use Sportmonks\SoccerAPI\Requests\Market;
use Sportmonks\SoccerAPI\Requests\Commentary;
use Sportmonks\SoccerAPI\Requests\Fixture;
use Sportmonks\SoccerAPI\Requests\Head2Head;
use Sportmonks\SoccerAPI\Requests\League;
use Sportmonks\SoccerAPI\Requests\Continent;
use Sportmonks\SoccerAPI\Requests\Country;
use Sportmonks\SoccerAPI\Requests\LiveScore;
use Sportmonks\SoccerAPI\Requests\Odds;
use Sportmonks\SoccerAPI\Requests\Player;
use Sportmonks\SoccerAPI\Requests\Round;
use Sportmonks\SoccerAPI\Requests\Season;
use Sportmonks\SoccerAPI\Requests\Standings;
use Sportmonks\SoccerAPI\Requests\Team;
use Sportmonks\SoccerAPI\Requests\TopScorer;
use Sportmonks\SoccerAPI\Requests\TVStation;
use Sportmonks\SoccerAPI\Requests\Venue;
use Sportmonks\SoccerAPI\Requests\Video;
use Sportmonks\SoccerAPI\Requests\Squad;
use Sportmonks\SoccerAPI\Requests\Coach;
use Sportmonks\SoccerAPI\Requests\Healthcheck;
use Sportmonks\SoccerAPI\Requests\AllRequests;

/**
 * Class SoccerAPI
 *
 * @package Sportmonks\SoccerAPI
 */
class SoccerAPI {
    /**
     * @return \Sportmonks\SoccerAPI\Requests\Bookmaker
     */
    public function bookmakers()
    {
        return new Bookmaker();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Commentary
     */
    public function commentaries()
    {
        return new Commentary();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\League
     */
    public function leagues()
    {
        return new League();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Head2Head
     */
    public function head2head()
    {
        return new Head2Head();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Continent
     */
    public function continents()
    {
        return new Continent();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Country
     */
    public function countries()
    {
        return new Country();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Fixture
     */
    public function fixtures()
    {
        return new Fixture();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\TVStation
     */
    public function tvstations()
    {
        return new TVStation();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Venue
     */
    public function venues()
    {
        return new Venue();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Round
     */
    public function rounds()
    {
        return new Round();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\LiveScore
     */
    public function livescores()
    {
        return new LiveScore();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Odds
     */
    public function odds()
    {
        return new Odds();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\InPlayOdds
     */
    public function inplayodds()
    {
        return new InPlayOdds();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Player
     */
    public function players()
    {
        return new Player();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Season
     */
    public function seasons()
    {
        return new Season();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Standings
     */
    public function standings()
    {
        return new Standings();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Team
     */
    public function teams()
    {
        return new Team();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\TopScorer
     */
    public function topscorers()
    {
        return new TopScorer();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Video
     */
    public function videos()
    {
        return new Video();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Squad
     */
    public function squads()
    {
        return new Squad();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Market
     */
    public function markets()
    {
        return new Market();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Coach
     */
    public function coaches()
    {
        return new Coach();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\Healthcheck
     */
    public function healthcheck()
    {
        return new Healthcheck();
    }

    /**
     * @return \Sportmonks\SoccerAPI\Requests\AllRequests
     */
    public function allrequests()
    {
        return new AllRequests();
    }
}
