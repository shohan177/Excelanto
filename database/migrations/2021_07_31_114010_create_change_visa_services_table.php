<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeVisaServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_visa_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->string('cpr')->nullable();
            $table->string('service_type')->nullable();
            $table->float('fees')->nullable();
            $table->string('delivery_type')->nullable();
            $table->float('delivery_charge')->nullable();
            $table->string('document')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('comments')->nullable();
            $table->string('service_status')->nullable();
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
        Schema::dropIfExists('change_visa_services');
    }
}
