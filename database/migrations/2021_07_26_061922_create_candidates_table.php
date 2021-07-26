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
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('company_id');
            $table->string('candidate_name')->nullable();
            $table->string('candidate_dob')->nullable();
            $table->string('candidate_gender')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('candidate_email')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('active_status')->nullable();
            $table->string('candidate_picture')->nullable();
            $table->string('candidate_resume')->nullable();
            $table->string('pre_medical_certificate')->nullable();
            $table->string('pre_traning_certificate')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('created_id');
            $table->string('updated_by')->nullable();
            $table->unsignedBigInteger('updated_id');
            $table->unsignedBigInteger('pre_medical_id');
            $table->unsignedBigInteger('pre_training_id');
            $table->string('pre_medical_status')->nillable();
            $table->string('pre_training_status')->nillable();
            $table->string('pre_updated_dt')->nillable();
            $table->string('approval_status')->nillable();
            $table->string('pre_medical_report')->nillable();
            $table->string('pre_training_report')->nillable();
            $table->string('pre_medical_dt')->nillable();
            $table->string('pre_training_dt')->nillable();
            $table->string('pre_medical_comments')->nillable();
            $table->string('pre_training_comments')->nillable();
            $table->boolean('status')->default(true);
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
