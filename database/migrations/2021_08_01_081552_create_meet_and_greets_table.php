<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetAndGreetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meet_and_greets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->string('guest_name')->nullable();
            $table->string('number_of_guests')->nullable();
            $table->string('service_name')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('airline_name')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('flight_time')->nullable();
            $table->string('transport_service')->nullable();
            $table->string('passport_copy')->nullable();
            $table->text('comments')->nullable();
            $table->string('active_status')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('meet_and_greets');
    }
}
