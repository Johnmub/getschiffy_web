<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVipAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vip_addresses', function (Blueprint $table) {
			$table->id('id_vip_address');
			$table->string('vip_address', 512)->unique();
			$table->string('vip_name', 255);
			$table->timestamps($precision = 0);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vip_addresses');
    }
}
