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
        Schema::create('allfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boardId')->nullable(); // Allow null values
            $table->string('boardStatus')->default('active');
            $table->string('boardname')->default('Default Board Name');
            $table->text('feedback')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('boardId')->references('id')->on('feedbackboard')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allfeedbacks');
    }
};
