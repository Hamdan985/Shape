<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDietplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dietplan', function (Blueprint $table) {
            $table->bigIncrements('dpid');
            
            $table->unsignedBigInteger('tid')->nullable();
            $table->foreign('tid')->references('tid')->on('trainers');

            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('customers');

            $table->string('morning');
            $table->string('afternoon');
            $table->string('evening');
            $table->string('night');
            
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
        Schema::dropIfExists('dietplan');
    }
}
