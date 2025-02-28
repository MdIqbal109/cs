<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('emergency_bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('ambulance_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('emergency_bookings', function (Blueprint $table) {
            $table->dropColumn('ambulance_id');
        });
    }
};
