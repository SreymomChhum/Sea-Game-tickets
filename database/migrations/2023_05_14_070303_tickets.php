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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("event_id");
            $table->unsignedBigInteger("team_match_id");
            $table->unsignedBigInteger("zone_id");
            $table->foreign("event_id")
            ->references("id")
            ->on("events")
            ->onDelete('cascade');
            $table->foreign("team_match_id")
            ->references("id")
            ->on("team_matching")
            ->onDelete('cascade');
            $table->foreign("zone_id")
            ->references("id")
            ->on("zones")
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
