<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeworkChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homework_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('homework_id');
            $table->timestamps();
        });

        Schema::table('homework_checks', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homework_checks');
    }
}
