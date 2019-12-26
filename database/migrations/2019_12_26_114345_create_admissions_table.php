<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('aid');

            $table->unsignedBigInteger('mid')->nullable();
            $table->foreign('mid')->references('mid')->on('membership');

            $table->unsignedBigInteger('cid')->nullable();
            $table->foreign('cid')->references('cid')->on('customers');

            $table->date('startdate');
            $table->date('enddate');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
