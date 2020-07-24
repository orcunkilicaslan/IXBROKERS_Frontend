<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->string('market_name', 50);
            $table->tinyInteger('type');
            $table->text('fetch_url');
            $table->decimal('current_price', 18, 8)->nullable();
            $table->decimal('bid', 18, 8)->nullable();
            $table->decimal('ask', 18, 8)->nullable();
            $table->decimal('open', 18, 8)->nullable();
            $table->decimal('previous_close', 18, 8)->nullable();
            $table->bigInteger('volume')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('markets');
    }
}
