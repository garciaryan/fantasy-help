<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use App\Player;
use DB;

class PlayerController extends Controller
{
    public function store()
    {
      try {

        $client = new Client();
        $season = '2017-18';
        $seasonType = 'Regular Season';

        $res = $client->get('http://stats.nba.com/stats/leaguedashplayerstats?College=&Conference=&Country=&DateFrom=&DateTo=&Division=&DraftPick=&DraftYear=&GameScope=&GameSegment=&Height=&LastNGames=0&LeagueID=00&Location=&MeasureType=Base&Month=0&OpponentTeamID=0&Outcome=&PORound=0&PaceAdjust=N&PerMode=PerGame&Period=0&PlayerExperience=&PlayerPosition=&PlusMinus=N&Rank=N&Season=' . $season . '&SeasonSegment=&SeasonType=' . $seasonType . '&ShotClockRange=&StarterBench=&TeamID=0&VsConference=&VsDivision=&Weight=', ['headers' => [
        'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36',
        'Accept' => 'application/json'
        ]]);

        $json = json_decode($res->getBody(), true);
        $rowset = $json['resultSets'][0]['rowSet'];

        foreach($rowset as $data) {
          $rewriteKeys = array(
            '0' => 'player_id',
            '1' => 'player_name',
            '2' => 'team_id',
            '3' => 'team_abbreviation',
            '4' => 'age',
            '5' => 'gp',
            '6' => 'w',
            '7' => 'l',
            '8' => 'w_pct',
            '9' => 'min',
            '10' => 'fgm',
            '11' => 'fga',
            '12' => 'fg_pct',
            '13' => 'fg3m',
            '14' => 'fg3a',
            '15' => 'fg3_pct',
            '16' => 'ftm',
            '17' => 'fta',
            '18' => 'ft_pct',
            '19' => 'oreb',
            '20' => 'dreb',
            '21' => 'reb',
            '22' => 'ast',
            '23' => 'tov',
            '24' => 'stl',
            '25' => 'blk',
            '26' => 'blka',
            '27' => 'pf',
            '28' => 'pfd',
            '29' => 'pts',
            '30' => 'plus_minus',
            '31' => 'nba_fantasy_pts',
            '32' => 'dd2',
            '33' => 'td3',
            '34' => 'gp_rank',
            '35' => 'w_rank',
            '36' => 'l_rank',
            '37' => 'w_pct_rank',
            '38' => 'min_rank',
            '39' => 'fgm_rank',
            '40' => 'fga_rank',
            '41' => 'fg_pct_rank',
            '42' => 'fg3m_rank',
            '43' => 'fg3a_rank',
            '44' => 'fg3_pct_rank',
            '45' => 'ftm_rank',
            '46' => 'fta_rank',
            '47' => 'ft_pct_rank',
            '48' => 'oreb_rank',
            '49' => 'dreb_rank',
            '50' => 'reb_rank',
            '51' => 'ast_rank',
            '52' => 'tov_rank',
            '53' => 'stl_rank',
            '54' => 'blk_rank',
            '55' => 'blka_rank',
            '56' => 'pf_rank',
            '57' => 'pfd_rank',
            '58' => 'pts_rank',
            '59' => 'plus_minus_rank',
            '60' => 'nba_fantasy_pts_rank',
            '61' => 'dd2_rank',
            '62' => 'td3_rank',
            '63' => 'cfid',
            '64' => 'cfparams'
          );
          $player = array();
          foreach ($data as $key => $value){
            $player[ $rewriteKeys[$key] ] = $value;
          }
          Player::updateOrCreate(['player_id' => $player['player_id']] ,$player);
        }
      }
      catch (RequestException $e) {
        if ($e){
          echo "Something went wrong. Please try again.";
        }
      }
    }

    public function show()
    {
      $players = Player::all();
      return $players;
    }

    public function destroy()
    {
      $players = DB::table('players')->delete();
      return $players;
    }

}
