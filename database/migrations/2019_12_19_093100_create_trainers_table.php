<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('tid');
            $table->string('tname');
            $table->string('taddress');
            $table->string('tphone')->unique();
            $table->string('gender')->nullable();
            $table->string('salary')->nullable();
            $table->date('doj')->nullable();

            $table->unsignedBigInteger('gid')->nullable();
            $table->foreign('gid')->references('gid')->on('gyms');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('pan')->nullable();

            $table->rememberToken();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('trainers');
    }
}
