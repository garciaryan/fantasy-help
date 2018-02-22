<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;


class PlayerController extends Controller
{
    //
    public function index ()
    {
      return view('compare');
    }

    public function get_stats(Request $request)
    {
      $client = new Client(['base_uri'=>'http://stats.nba.com/stats/leaguedashplayerstats?', 'timeout' => 5.0,]);
      $urlObj = [
        'College'=> '',
        'Conference'=> '',
        'Country'=> '',
        'DateFrom'=> '',
        'DateTo'=> '',
        'Division'=> '',
        'DraftPick'=> '',
        'DraftYear'=> '',
        'GameScope'=> '',
        'GameSegment'=> '',
        'Height'=> '',
        'LastNGames'=> '0',
        'LeagueID'=> '00',
        'Location'=> '',
        'MeasureType'=> 'Base',
        'Month'=> '0',
        'OpponentTeamID'=> '0',
        'Outcome'=> '',
        'PORound'=> '0',
        'PaceAdjust'=> 'N',
        'PerMode'=> 'PerGame',
        'Period'=> '0',
        'PlayerExperience'=> '',
        'PlayerPosition'=> '',
        'PlusMinus'=> 'N',
        'Rank'=> 'N',
        'Season'=> '',
        'SeasonSegment'=> '',
        'SeasonType'=> '',
        'ShotClockRange'=> '',
        'StarterBench'=> '',
        'TeamID'=> '0',
        'VsConference'=> '',
        'VsDivision'=> '',
        'Weight'=> ''
      ];

      $headers = ['User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.76 Safari/537.36'];

      $result = $client->request('GET', 'http://stats.nba.com/stats/leaguedashplayerstats?',[
        'headers' => $headers,
        'query' => $urlObj
      ]);
      //$json = json_decode(file_get_contents($request), true);
      echo($result->url);
    }
}
