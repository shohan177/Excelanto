<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJailAndDeportationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jail_and_deportations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->unsignedBigInteger('job_category_id')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_relation')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_expirydate')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_expirydate')->nullable();
            $table->string('cause_of_arrest')->nullable();
            $table->string('police_station_name')->nullable();
            $table->string('arrest_date')->nullable();
            $table->string('passport_copy')->nullable();
            $table->text('comments')->nullable();
            $table->string('created_id')->nullable();
            $table->string('active_status')->nullable();
            $table->string('deleted')->nullable();
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
        Schema::dropIfExists('jail_and_deportations');
    }
}
