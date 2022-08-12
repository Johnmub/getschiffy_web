<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerifyEmailTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verify_email_tokens', function (Blueprint $table) {
            $table->id('verify_id');
            $table->string('verify_token')->unique();
            $table->string('verify_email');
            $table->char('verify_verified', 1)->default(0);
            $table->char('verify_game_login', 1)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verify_email_tokens');
    }
}
