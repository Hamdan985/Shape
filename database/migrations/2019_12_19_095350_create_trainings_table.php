<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('trid');

            $table->unsignedBigInteger('gid')->nullable();
            $table->foreign('gid')->references('gid')->on('gyms')->onDelete('cascade');

            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('customers')->onDelete('cascade');

            $table->unsignedBigInteger('tid')->nullable();
            $table->foreign('tid')->references('tid')->on('trainers')->onDelete('cascade');

            $table->string('type');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('duration')->nullable();
            $table->string('slots')->nullable();
            $table->string('fees')->nullable();

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
        Schema::dropIfExists('trainings');
    }
}
