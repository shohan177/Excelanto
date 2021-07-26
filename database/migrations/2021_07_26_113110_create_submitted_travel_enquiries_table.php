<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmittedTravelEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submitted_travel_enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enquiry_id');
            $table->string('journey_date')->nullable();
            $table->integer('total_tickets')->nullable();
            $table->string('submitted_cost')->nullable();
            $table->text('travel_agency_comments')->nullable();
            $table->unsignedBigInteger('travel_agency_id');
            $table->string('submitted_date')->nullable();
            $table->string('submitted_status')->nullable();
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
        Schema::dropIfExists('submitted_travel_enquiries');
    }
}
