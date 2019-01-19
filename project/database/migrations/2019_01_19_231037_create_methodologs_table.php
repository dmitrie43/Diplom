<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMethodologsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methodologs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authorMethodolog')->nullable();
            $table->string('nameMethodolog')->nullable();
            $table->string('publishMethodolog')->nullable();
            $table->string('yearMethodolog')->nullable();
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
        Schema::dropIfExists('methodologs');
    }
}
