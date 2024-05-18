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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
        //     'ip_address',
        // 'visits',
        // 'country',
        // 'city',
        // 'region',
        // 'postal_code',
        // 'session_id'
            $table->string('ip_address');
            $table->integer('visits')->default(1);
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('session_id')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('browser')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
