<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journal_currencies', function (Blueprint $table) {
            $table->id();
            $table->integer('journal_id')->unsigned();
            $table->integer('currency_id')->unsigned();
            $table->string('image_url', 200);
            $table->text('detail');
            $table->string('title', 200);
            $table->string('resistance_c1', 50);
            $table->string('resistance_c2', 50);
            $table->string('resistance_c3', 50);
            $table->string('support_c1', 50);
            $table->string('support_c2', 50);
            $table->string('support_c3', 50);
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
        Schema::dropIfExists('journal_currencies');
    }
}
