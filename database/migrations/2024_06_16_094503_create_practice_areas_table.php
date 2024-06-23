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
        Schema::create('practice_areas', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('title',250);
=======
            $table->string('name',250);
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
            $table->string('icon',250);
            $table->string('header_img',250)->nullable();
            $table->longText('breif_description')->nullable();
            $table->longText('description')->nullable();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practice_areas');
    }
};
