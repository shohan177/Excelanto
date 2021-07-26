<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeEmployerServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_employer_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('wsc_id');
            $table->string('cpr')->nullable();
            $table->text('new_offer_letter')->nullable();
            $table->text('comments')->nullable();
            $table->string('service_status')->nullable();
            $table->string('delivery_type')->nullable();
            $table->integer('fees')->nullable();
            $table->integer('delivery_charge')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('document')->nullable();
            $table->integer('created_id')->nullable();
            $table->integer('deleted')->nullable();
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
        Schema::dropIfExists('change_employer_services');
    }
}
