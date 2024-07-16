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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('feedback')->nullable();
            $table->unsignedBigInteger('feedbackboard_id'); // Add this line
            $table->timestamps();

            // Assuming you have a feedbackboard table
            $table->foreign('feedbackboard_id')->references('id')->on('feedbackboard')->onDelete('cascade'); // Add this line
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->dropForeign(['feedbackboard_id']); // Add this line
        });

        Schema::dropIfExists('feedbacks');
    }
};
