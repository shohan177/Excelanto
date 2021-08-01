<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_enquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('oss_id')->nullable();
            $table->string('start_point')->nullable();
            $table->string('end_point')->nullable();
            $table->string('tickets_required')->nullable();
            $table->string('date_of_journey')->nullable();
            $table->string('end_date')->nullable();
            $table->text('oss_comments')->nullable();
            $table->string('enquiry_status')->nullable();
            $table->string('created_date')->nullable();
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
        Schema::dropIfExists('travel_enquiries');
    }
}
