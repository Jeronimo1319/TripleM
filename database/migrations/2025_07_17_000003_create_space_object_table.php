<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('space_object', function (Blueprint $table) {
            $table->unsignedBigInteger('space_id');
            $table->unsignedBigInteger('object_id');
            $table->foreign('space_id')->references('space_id')->on('spaces')->onDelete('cascade');
            $table->foreign('object_id')->references('object_id')->on('objects')->onDelete('cascade');
            $table->primary(['space_id', 'object_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('space_object');
    }
};
