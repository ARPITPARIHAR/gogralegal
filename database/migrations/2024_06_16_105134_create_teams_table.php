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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name',250);
<<<<<<< HEAD
            $table->string('thumbnail_img',250)->nullable();
=======
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
            $table->string('designation',250);
            $table->text('brief_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
