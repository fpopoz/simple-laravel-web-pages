<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_addresses', function (Blueprint $table) {
            $table->increments('adid');
             $table->string('address');
            $table->string('phone');
            $table->longtext('email');
            
            $table->string('fblink');
            $table->string('twlink');
            $table->string('pinling');
            $table->string('gplink');
            $table->string('status');
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
        Schema::dropIfExists('tbl_addresses');
    }
}
