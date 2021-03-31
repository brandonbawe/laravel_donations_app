<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AmountDonated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('amount_donated', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donation_id');
            $table->string('donation_name');
            $table->mediumText('message');
            $table->integer('amount_donated');
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
        //
    }
}
