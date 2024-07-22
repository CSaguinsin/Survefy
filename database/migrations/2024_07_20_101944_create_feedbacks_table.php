<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('feedback')->nullable();
            $table->unsignedBigInteger('feedbackboard_id');
            $table->timestamps();

            $table->foreign('feedbackboard_id')->references('id')->on('feedbackboards')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('feedbacks', function (Blueprint $table) {
            $table->dropForeign(['feedbackboard_id']);
        });

        Schema::dropIfExists('feedbacks');
    }
};
