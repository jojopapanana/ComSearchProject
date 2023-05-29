<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('event_name');
            $table->string('organizer');
            $table->date('event_start_date');
            $table->date('event_end_date');
            $table->date('registration_start_date');
            $table->date('registration_end_date');
            $table->string('event_ig1');
            $table->string('event_ig2')->nullable();
            $table->string('event_ig3')->nullable();
            $table->longText('event_description');
            $table->string('group_link');
            $table->string('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
