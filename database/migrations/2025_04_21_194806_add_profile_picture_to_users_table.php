<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->string('profile_picture')->nullable()->after('email'); // ou après un autre champ
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Illuminate\Database\Schema\Blueprint $table) {
            $table->dropColumn('profile_picture');
        });
    }
};
