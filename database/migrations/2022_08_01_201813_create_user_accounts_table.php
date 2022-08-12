<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) 
        {
            $table->id('user_id');
            $table->string('user_address', 512)->unique();
            $table->foreignId('last_login_id')->constrained('latest_logins', 'last_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /**
     * Get the user associated with the 2022_08_01_201813_create_user_accounts_table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}
