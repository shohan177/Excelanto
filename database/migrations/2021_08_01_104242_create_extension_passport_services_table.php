<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionPassportServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extension_passport_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('cpr')->nullable();
            $table->text('comments')->nullable();
            $table->string('extention_passport')->nullable();
            $table->string('service_status')->nullable();
            $table->string('passport')->nullable();
            $table->float('fees')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('reject_reason')->nullable();
            $table->string('b_embassy_id')->nullable();
            $table->string('created_id')->nullable();
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
        Schema::dropIfExists('extension_passport_services');
    }
}
