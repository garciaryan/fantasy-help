<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastSeason extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('last_season', function (Blueprint $table) {
        $table->increments('id');
        $table->timestamps();
        $table->integer('player_id');
        $table->string('player_name');
        $table->integer('team_id');
        $table->string('team_abbreviation', 3);
        $table->integer('age');
        $table->integer('gp');
        $table->integer('w');
        $table->integer('l');
        $table->float('w_pct', 5, 2);
        $table->float('min', 5, 2);
        $table->float('fgm', 5, 2);
        $table->float('fga', 5, 2);
        $table->float('fg_pct', 5, 2);
        $table->float('fg3m', 5, 2);
        $table->float('fg3a', 5, 2);
        $table->float('fg3_pct', 5, 2);
        $table->float('ftm', 5, 2);
        $table->float('fta', 5, 2);
        $table->float('ft_pct', 5, 2);
        $table->float('oreb', 5, 2);
        $table->float('dreb', 5, 2);
        $table->float('reb', 5, 2);
        $table->float('ast', 5, 2);
        $table->float('tov', 5, 2);
        $table->float('stl', 5, 2);
        $table->float('blk', 5, 2);
        $table->float('blka', 5, 2);
        $table->float('pf', 5, 2);
        $table->float('pfd', 5, 2);
        $table->float('pts', 5, 2);
        $table->float('plus_minus', 5, 2);
        $table->float('nba_fantasy_pts', 5, 2);
        $table->float('dd2', 5, 2);
        $table->float('td3', 5, 2);
        $table->integer('gp_rank');
        $table->integer('w_rank');
        $table->integer('l_rank');
        $table->integer('w_pct_rank');
        $table->integer('min_rank');
        $table->integer('fgm_rank');
        $table->integer('fga_rank');
        $table->integer('fg_pct_rank');
        $table->integer('fg3m_rank');
        $table->integer('fg3a_rank');
        $table->integer('fg3_pct_rank');
        $table->integer('ftm_rank');
        $table->integer('fta_rank');
        $table->integer('ft_pct_rank');
        $table->integer('oreb_rank');
        $table->integer('dreb_rank');
        $table->integer('reb_rank');
        $table->integer('ast_rank');
        $table->integer('tov_rank');
        $table->integer('stl_rank');
        $table->integer('blk_rank');
        $table->integer('blka_rank');
        $table->integer('pf_rank');
        $table->integer('pfd_rank');
        $table->integer('pts_rank');
        $table->integer('plus_minus_rank');
        $table->integer('nba_fantasy_pts_rank');
        $table->integer('dd2_rank');
        $table->integer('td3_rank');
        $table->integer('cfid');
        $table->string('cfparams', 18);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
