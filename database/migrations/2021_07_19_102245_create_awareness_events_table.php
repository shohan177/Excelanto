<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwarenessEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awareness_events', function (Blueprint $table) {
            $table->id();
            $table->integer('event_category_id')->nullable();
            $table->string('event_agenda')->nullable();
            $table->string('conducted_by')->nullable();
            $table->string('event_date',100)->nullable();
            $table->string('event_time',100)->nullable();
            $table->string('place')->nullable();
            $table->string('event_description')->nullable();
            // $table->string('created_at')->nullable();
            $table->integer('created_id')->nullable();
            $table->string('event_status')->nullable();
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
        Schema::dropIfExists('awareness_events');
    }
}
