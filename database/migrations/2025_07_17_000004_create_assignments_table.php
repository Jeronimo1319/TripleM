<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->unsignedBigInteger('space_id');
            $table->unsignedBigInteger('user_id');
            $table->date('assignment_date');
            $table->date('withdrawal_date')->nullable();
            $table->timestamps();

            $table->foreign('space_id')->references('space_id')->on('spaces')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
