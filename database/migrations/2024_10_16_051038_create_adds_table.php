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
        Schema::create('adds', function (Blueprint $table) {
            $table->id(); // This is the primary key for the adds table
            $table->unsignedBigInteger('u_id'); // Define `u_id` as a regular unsigned big integer column
    
            // Foreign key relationship with `users` table
            $table->foreign('u_id')->references('id')->on('users')->onDelete('cascade');
    
            $table->string('name');
            $table->decimal('rate', 8, 2);
            $table->string('colors');
            $table->string('size');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adds');
    }
};
