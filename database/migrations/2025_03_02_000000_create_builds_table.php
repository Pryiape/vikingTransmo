<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildsTable extends Migration
{
    public function up()
    {
        Schema::create('builds', function (Blueprint $table) {
            $table->id();
            $table->string('sujet');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('builds');
    }
}
