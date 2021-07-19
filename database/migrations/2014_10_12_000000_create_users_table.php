<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('country_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->nullable();
            $table->enum('active_status', ['New','Pending', 'Approved', 'Rejected'])->default('New');
            $table->integer('quata')->nullable();
            $table->string('company_regno')->nullable();
            $table->string('domain')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_register_number')->nullable();
            $table->string('abbr')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->string('logo')->nullable();
            $table->longText('document1')->nullable();
            $table->longText('document2')->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->integer('childosc_id')->nullable();
            $table->string('cosc_assigned_status')->nullable();
            // $table->foreign('role_id')->references('id')->on('roles');
            // $table->foreign('country_id')->references('id')->on('countries');
            $table->rememberToken();
            $table->timestamps();



            // $table->id();
            // $table->unsignedBigInteger('role_id');
            // $table->unsignedBigInteger('country_id');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->string('user_type')->nullable();
            // $table->enum('active_status', ['New','Pending', 'Approved', 'Rejected'])->default('New');
            // $table->integer('quata')->nullable();
            // $table->string('company_regno')->nullable();
            // $table->string('domain')->nullable();
            // $table->string('company_name')->nullable();
            // $table->string('abbr')->nullable();
            // $table->string('mobile')->nullable();
            // $table->string('city')->nullable();
            // $table->string('state')->nullable();
            // $table->text('address1')->nullable();
            // $table->text('address2')->nullable();
            // $table->string('logo')->nullable();
            // $table->longText('document1')->nullable();
            // $table->longText('document2')->nullable();
            // $table->enum('status', ['active', 'inactive'])->nullable();
            // $table->integer('childosc_id')->nullable();
            // $table->string('cosc_assigned_status')->nullable();
            // // $table->foreign('role_id')->references('id')->on('roles');
            // // $table->foreign('country_id')->references('id')->on('countries');
            // $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
