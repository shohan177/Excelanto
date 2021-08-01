<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmnestyServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amnesty_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->string('service_type')->nullable();
            $table->string('cpr')->nullable();
            $table->text('amnesty_application')->nullable();
            $table->text('comments')->nullable();
            $table->string('service_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('delivery_charge')->nullable();
            $table->float('fees')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('amnesty_pdf')->nullable();
            $table->string('delivery_type')->nullable();
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
        Schema::dropIfExists('amnesty_services');
    }
}
