<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
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
            $table->float('w_pct', 3, 2);
            $table->float('min', 3, 2);
            $table->float('fgm', 3, 2);
            $table->float('fga', 3, 2);
            $table->float('fg_pct', 3, 2);
            $table->float('fg3m', 3, 2);
            $table->float('fg3a', 3, 2);
            $table->float('fg3_pct', 3, 2);
            $table->float('ftm', 3, 2);
            $table->float('fta', 3, 2);
            $table->float('ft_pct', 3, 2);
            $table->float('oreb', 3, 2);
            $table->float('dreb', 3, 2);
            $table->float('reb', 3, 2);
            $table->float('ast', 3, 2);
            $table->float('tov', 3, 2);
            $table->float('stl', 3, 2);
            $table->float('blk', 3, 2);
            $table->float('blka', 3, 2);
            $table->float('pf', 3, 2);
            $table->float('pfd', 3, 2);
            $table->float('pts', 3, 2);
            $table->float('plus_minus', 3, 2);
            $table->float('nba_fantasy_pts', 3, 2);
            $table->float('dd2', 3, 2);
            $table->float('td3', 3, 2);
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
        Schema::dropIfExists('players');
    }
}
