<?php

namespace Sportmonks\SoccerAPI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class SoccerAPI
 *
 * @package Sportmonks\SoccerAPI\Facades
 */
class SoccerAPI extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'soccerapi';
    }

}
