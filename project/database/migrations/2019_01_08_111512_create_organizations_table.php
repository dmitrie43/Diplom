<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id');
            $table->float('longitude')->default(0);
            $table->float('latitude')->default(0);
            $table->string('slug');
            $table->string('nameOrganization');
            $table->text('statusOrganization')->nullable();
            $table->text('numberDocumentation')->nullable();
            //$table->text('fullNameTeachers')->nullable();
            //$table->text('museums')->nullable();
            //$table->text('cabinets')->nullable();
            //$table->text('others')->nullable();
            //$table->string('subjectStudyLang')->nullable();
            //$table->string('bookLang')->nullable();
            //$table->string('methodologicalSupportLang')->nullable();
            //$table->string('openClassroomLang')->nullable();
            //$table->string('societyLang')->nullable();
            //$table->string('collectivesLang')->nullable();
            //$table->string('eventCultureLevel')->nullable();
            //$table->string('eventCultureForm')->nullable();
            //$table->string('eventCultureName')->nullable();
            //$table->string('eventCultureTime')->nullable();
            //$table->text('additionalInfo')->nullable();
            //$table->integer('culture_id')->nullable();
            //$table->integer('event_id')->nullable();
//            $table->integer('director_id')->nullable();
//            $table->integer('responsible_id')->nullable();
//            $table->integer('teachers_id')->nullable();
//            $table->integer('museums_id')->nullable();
//            $table->integer('cabinets_id')->nullable();
//            $table->integer('others_id')->nullable();
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
        Schema::dropIfExists('organizations');
    }
}
