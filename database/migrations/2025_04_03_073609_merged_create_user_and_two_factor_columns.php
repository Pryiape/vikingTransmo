<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\Fortify\Fortify;

class MergedCreateUsersAndAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Drop the users table if it exists
        Schema::dropIfExists('users');

        // Recreate the users table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('utilisateur');
            $table->string('profile_picture')->nullable();
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            if (Fortify::confirmsTwoFactorAuthentication()) {
                $table->timestamp('two_factor_confirmed_at')->nullable();
            }
            $table->rememberToken();
            $table->timestamps();
        });

        // Drop the foreign key constraint from the builds table if exists
        Schema::table('builds', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        // Re-add the foreign key constraint to the builds table
        Schema::table('builds', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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

        // Recreate the users table without the role, profile_picture, and two-factor columns
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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }
}