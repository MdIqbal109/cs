<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmergencyBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('emergency_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->unsignedBigInteger('hospital_id');  // This should be here
            $table->unsignedBigInteger('ambulance_id')->nullable();
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('emergency_bookings');
    }
}
