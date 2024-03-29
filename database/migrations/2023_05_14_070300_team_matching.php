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
        //
        Schema::create('team_matching', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("event_id");
            $table->foreign("event_id")
            ->references("id")
            ->on("events")
            ->onDelete('cascade');
            $table->unsignedBigInteger("match_id");
            $table->foreign("match_id")
            ->references("id")
            ->on("matches")
            ->onDelete('cascade');
            $table->unsignedBigInteger("team_id");
            $table->foreign("team_id")
            ->references("id")
            ->on("teams")
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
