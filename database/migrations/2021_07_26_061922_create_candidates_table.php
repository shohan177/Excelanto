<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('job_category_id');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('candidate_dob')->nullable();
            $table->string('candidate_gender')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('candidate_email')->nullable();
            $table->string('candidate_password')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('active_status')->default('Active');
            $table->string('candidate_picture')->nullable();
            $table->string('candidate_resume')->nullable();
            $table->string('passport')->nullable();
            $table->string('pre_medical_certificate')->nullable();
            $table->string('pre_traning_certificate')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('created_id')->nullable();
            $table->string('updated_by')->nullable();
            $table->unsignedBigInteger('updated_id')->nullable();
            $table->unsignedBigInteger('pre_medical_id')->nullable();
            $table->unsignedBigInteger('pre_training_id')->nullable();
            $table->string('pre_medical_status')->nullable();
            $table->string('pre_training_status')->nullable();
            $table->string('pre_updated_dt')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('pre_medical_report')->nullable();
            $table->string('pre_training_report')->nullable();
            $table->string('pre_medical_dt')->nullable();
            $table->string('pre_training_dt')->nullable();
            $table->string('pre_medical_comments')->nullable();
            $table->string('pre_training_comments')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Selected', 'Reviewed', 'Forwarded', 'Interview', 'confirmed'])->nullable();
            $table->enum('result_status',['New','Physical Interview','Online Interview','Selected','Rejected'])->nullable();
            $table->string('offer_letter')->nullable();
            $table->string('employer_comments')->nullable();
            // $table->string('status')->default('Active');
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
        Schema::dropIfExists('candidates');
    }
}
