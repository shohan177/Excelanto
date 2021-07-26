<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_post_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('applier_id');
            $table->unsignedBigInteger('selected_medical_id')->nullable();
            $table->unsignedBigInteger('selected_training_id')->nullable();
            $table->string('job_vacancy')->nullable();
            $table->string('applied_vacancy')->nullable();
            $table->text('remarks')->nullable();
            $table->string('applier_agency_name')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->string('status')->nullable();
            $table->string('approved_by')->nullable();
            $table->integer('approved_vacancy')->nullable();
            $table->string('approved_date')->nullable();
            $table->string('approved_company_name')->nullable();
            $table->integer('approved_id')->nullable();
            $table->string('approved_remarks')->nullable();
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
        Schema::dropIfExists('applied_jobs');
    }
}
