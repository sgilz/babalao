<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger('user_id')->unsigned();
            $table->foreign("user_id")->references("id")->on("users");
            $table->text("owner");
            $table->text("owner_id");
            $table->text('card_number');
            $table->text('expiration_date');
            $table->integer('cvv')->unsigned();
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
        Schema::dropIfExists('credit_cards');
    }
}
