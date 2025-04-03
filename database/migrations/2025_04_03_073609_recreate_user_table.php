<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the foreign key constraint from the builds table
        Schema::table('builds', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        // Drop the users table if it exists
        Schema::dropIfExists('users');

        // Recreate the users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('utilisateur'); // valeurs possibles : utilisateur, moderateur, admin
            $table->rememberToken();
            $table->timestamps();
        });

        // Re-add the foreign key constraint to the builds table
        Schema::table('builds', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the foreign key constraint from the builds table
        Schema::table('builds', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        // Drop the users table
        Schema::dropIfExists('users');

        // Recreate the users table without the role column
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Re-add the foreign key constraint to the builds table
        Schema::table('builds', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
        });
    }
}