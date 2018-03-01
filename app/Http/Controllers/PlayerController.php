<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class PlayerController extends Controller
{
    //
    public function index ()
    {
      return view('compare');
    }

    public function get_stats()
    {
      try {

        $client = new Client();
        $season = '2017-18';
        $seasonType = 'Regular Season';

        $res = $client->get('http://stats.nba.com/stats/leaguedashplayerstats?College=&Conference=&Country=&DateFrom=&DateTo=&Division=&DraftPick=&DraftYear=&GameScope=&GameSegment=&Height=&LastNGames=0&LeagueID=00&Location=&MeasureType=Base&Month=0&OpponentTeamID=0&Outcome=&PORound=0&PaceAdjust=N&PerMode=PerGame&Period=0&PlayerExperience=&PlayerPosition=&PlusMinus=N&Rank=N&Season=' . $season . '&SeasonSegment=&SeasonType=' . $seasonType . '&ShotClockRange=&StarterBench=&TeamID=0&VsConference=&VsDivision=&Weight=', ['headers' => [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36',
        'Accept' => 'application/json'
        ]]);

         echo $res->getBody();
      }
      catch (RequestException $e) {
        if ($e->getResponse()->getStatusCode() == '400'){
          echo "Bad Request!";
        }
      }
    }

}
