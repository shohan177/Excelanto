<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLostPassportServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_passport_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->unsignedBigInteger('b_embassy_id')->nullable();
            $table->string('cpr')->nullable();
            $table->string('bhr_mobile_no')->nullable();
            $table->string('bangladesh_mobile')->nullable();
            $table->text('bangladesh_address')->nullable();
            $table->string('spouse_cpr')->nullable();
            $table->string('spouse_mobile')->nullable();
            $table->string('salary')->nullable();
            $table->text('comments')->nullable();
            $table->string('service_status')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('passport')->nullable();
            $table->float('fees')->nullable();
            $table->string('reject_reason')->nullable();
            $table->unsignedBigInteger('created_id')->nullable();
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
        Schema::dropIfExists('lost_passport_services');
    }
}
