<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferedCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offered_candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('job_post_id')->nullable();
            $table->unsignedBigInteger('job_category_id')->nullable();
            $table->unsignedBigInteger('created_id')->nullable();
            $table->unsignedBigInteger('interview_osc_id')->nullable();
            $table->unsignedBigInteger('selected_osc_id')->nullable();
            $table->unsignedBigInteger('post_medical_id')->nullable();
            $table->unsignedBigInteger('post_biometric_id')->nullable();
            $table->unsignedBigInteger('post_training_id')->nullable();
            $table->unsignedBigInteger('travel_agency_id')->nullable();
            $table->unsignedBigInteger('welfare_center_id')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('candidate_email')->nullable();
            $table->unsignedBigInteger('candidate_user_id')->nullable();
            $table->string('candidate_password')->nullable();
            $table->string('result_status')->nullable()->comment('Selected,Post-Processing,Finalized,Visa-Applied,Visa-Approved,Visa-Rejected,Visa-Stamping-Request,Visa-Stamping-Rejected,Visa-Stamping-Approved');
            $table->string('active_status')->nullable();
            $table->text('employer_comments')->nullable();
            $table->string('offer_letter')->nullable();
            $table->string('payment_assigned')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('interview_result')->nullable();
            $table->string('biometric_fee')->nullable();
            $table->string('bio_status')->nullable();
            $table->string('bio_report')->nullable();
            $table->string('post_medical_status')->nullable()->comment('New,Pass,Fail');
            $table->string('post_training_status')->nullable()->comment('New,Pass,Fail');
            $table->string('post_medical_report')->nullable();
            $table->string('post_training_report')->nullable();
            $table->string('medical_fee')->nullable();
            $table->string('training_fee')->nullable();
            $table->text('post_medical_comments')->nullable();
            $table->text('post_training_comments')->nullable();
            $table->string('visa_document')->nullable();
            $table->text('visa_reason')->nullable();
            $table->string('travel_status')->nullable();

            $table->string('date_of_journey')->nullable();
            $table->string('flight_number')->nullable();
            $table->string('ticket_cost')->nullable();
            $table->string('ticket_pdf')->nullable();

            $table->string('activated_at')->nullable();
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
        Schema::dropIfExists('offered_candidates');
    }
}
