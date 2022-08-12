<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_accounts', function (Blueprint $table) 
        {
            $table->id('game_id');
            $table->string('game_email')->unique()->nullable();
            $table->float('game_gold', 14, 2,)->default(0);
            $table->char('game_verified', 1)->default(0);
            $table->foreignId('user_id')->constrained('user_accounts', 'user_id');
            $table->foreignId('last_login_id')->constrained('latest_logins', 'last_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_accounts');
    }
}
