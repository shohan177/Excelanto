<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttestationCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attestation_certificates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('wsc_id');
            $table->string('service_type')->nullable();
            $table->text('comments')->nullable();
            $table->text('service_status')->nullable();
            $table->integer('fees')->nullable();
            $table->float('delivery_charge')->nullable();
            $table->string('delivery_type')->nullable();
            $table->string('delivery_to')->nullable();
            $table->string('document')->nullable();
            $table->string('legal_status')->nullable();
            $table->integer('created_id')->nullable();
            $table->string('delivery_status')->nullable();
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
        Schema::dropIfExists('attestation_certificates');
    }
}
