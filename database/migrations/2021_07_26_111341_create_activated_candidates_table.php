<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivatedCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activated_candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->string('present_city')->nullable();
            $table->string('status')->nullable();
            $table->string('active_status')->nullable();
            $table->string('welfare_center_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('visa_pdf')->nullable();
            $table->string('created_by')->nullable();
            $table->unsignedBigInteger('created_id');
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
        Schema::dropIfExists('activated_candidates');
    }
}
