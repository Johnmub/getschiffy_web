 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscribers extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscribers', function (Blueprint $table) {
			$table->id('id_subscriber');
			$table->string('email_subscriber', 256)->unique();
			$table->string('locale_subscriber', 256);
			$table->timestamps($precision = 0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('subscribers');
	}
}
