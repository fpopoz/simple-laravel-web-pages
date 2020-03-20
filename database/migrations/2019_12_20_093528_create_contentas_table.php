<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contentas', function (Blueprint $table) {
            $table->increments('conid');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle')->nullable();
            $table->longtext('description');
            $table->string('image')->nullable();
            $table->string('category');
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
        Schema::dropIfExists('contentas');
    }
}
