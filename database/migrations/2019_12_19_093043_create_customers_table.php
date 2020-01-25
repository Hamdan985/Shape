<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('cid');
            $table->string('cname');
            $table->string('caddress')->nullable();
            $table->string('ccity');
            $table->string('cphone')->unique();
            $table->string('gender')->nullable();
            $table->string('balance')->nullable();
            $table->date('doj')->nullable();

            $table->unsignedBigInteger('gid')->nullable();
            $table->foreign('gid')->references('gid')->on('gyms');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

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
        Schema::dropIfExists('customers');
    }
}
