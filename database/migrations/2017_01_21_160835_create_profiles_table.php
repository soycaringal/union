<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('gender')->nullable();
            $table->string('contact')->nullable();
            $table->string('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('home_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('religion')->nullable();
            $table->string('date_of_hire')->nullable();
            $table->string('date_of_regular')->nullable();
            $table->string('name_of_mother')->nullable();
            $table->string('name_of_father')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_person_number')->nullable();
            $table->string('wage')->nullable();
            $table->string('note')->nullable();
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
