<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeadbodyTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deadbody_transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wsc_id')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('deadbody_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('passport_copy')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_expirydate')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_expirydate')->nullable();
            $table->string('cause_of_death')->nullable();
            $table->string('bangladesh_address')->nullable();
            $table->string('relative_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('comments')->nullable();
            $table->string('active_status')->nullable();
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
        Schema::dropIfExists('deadbody_transfers');
    }
}
