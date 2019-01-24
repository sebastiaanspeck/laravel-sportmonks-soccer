<?php

namespace Sportmonks\SoccerAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Sportmonks\SoccerAPI\Exceptions\ApiRequestException;

/**
 * Class SoccerAPIClient
 *
 * @package Sportmonks\SoccerAPI
 */
class SoccerAPIClient {

    /* @var $client Client */
    protected $client;

    protected $apiToken;
    protected $withoutData;
    protected $include = [];
    protected $leagues = [];
    protected $perPage = 50;
    protected $page = 1;
    protected $timezone;
    
    /**
     * SoccerAPIClient constructor.
     */
    public function __construct()
    {
        $options = [
            'base_uri'  => 'https://soccer.sportmonks.com/api/v2.0/',
            'verify'    => app('env') === 'testing' ? false : true,
        ];
        $this->client = new Client($options);

        $this->apiToken = config('soccerapi.api_token');
        if(empty($this->apiToken))
        {
            throw new \InvalidArgumentException('No API token set');
        }
        $this->timezone = empty(config('soccerapi.timezone')) ? config('app.timezone') : config('soccerapi.timezone');

        $this->withoutData = empty(config('soccerapi.without_data')) ? false : config('soccerapi.without_data');
    }

    /**
     * @param $url
     * @param bool $hasData
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    protected function call($url, $hasData = false)
    {
        $query = [
            'api_token' => $this->apiToken,
            'per_page' => $this->perPage,
            'page' => $this->page
        ];
        if(!empty($this->include))
        {
            $query['include'] = $this->include;
        }
        if ($this->timezone)
        {
            $query['tz'] = $this->timezone;
        }
        if(!empty($this->leagues))
        {
            $query['leagues'] = $this->leagues;
        }

        try {
            $response = $this->client->get($url, ['query' => $query]);
        } catch (ClientException $response) {
            preg_match('/.*"message":"(.*)",/', $response->getMessage(), $matches);
            
            $error = new \stdClass();
            $error->error_code = $response->getResponse()->getStatusCode();
            $error->error_message = $matches[1];
            
            return $error;
            
            // other option would be
            // abort($response->getResponse()->getStatusCode(), $matches[1]);
        }

        $body = json_decode($response->getBody()->getContents());

        if(property_exists($body, 'error'))
        {
            if(is_object($body->error))
            {
                throw new ApiRequestException($body->error->message, $body->error->code);
            }
            else
            {
                throw new ApiRequestException($body->error, 500);
            }
        }

        if($hasData && $this->withoutData)
        {
            return $body->data;
        }

        return $body;
    }

    /**
     * @param $url
     * @return mixed|\stdClass
     * @throws \Sportmonks\SoccerAPI\Exceptions\ApiRequestException
     */
    protected function callData($url)
    {
        return $this->call($url, true);
    }

    /**
     * @param $include - string or array of relations to include with the query
     * @return \Sportmonks\SoccerAPI\SoccerAPIClient
     */
    public function setInclude($include)
    {
        if(is_array($include) && !empty($include))
        {
            $include = implode(',', $include);
        }

        $this->include = $include;

        return $this;
    }

    /**
     * @param $leagues - string or array of leagues to return only specific leagues with the query
     * @return \Sportmonks\SoccerAPI\SoccerAPIClient
     */
    public function setLeagues($leagues)
    {
        if(is_array($leagues) && !empty($leagues))
        {
            $leagues = implode(',', $leagues);
        }

        $this->leagues = $leagues;

        return $this;
    }

    /**
     * @param $perPage - int of per_page limit data in request
     * @return \Sportmonks\SoccerAPI\SoccerAPIClient
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @param $page - int of requested page
     * @return \Sportmonks\SoccerAPI\SoccerAPIClient
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}
