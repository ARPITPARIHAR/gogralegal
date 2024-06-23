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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->default(0);
            $table->bigInteger('level')->default(0);
<<<<<<< HEAD
            $table->string('name', 250);
            $table->string('header_img', 250)->nullable();
            $table->text('breif_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_description', 250)->nullable();
=======
            $table->string('name',250);
            $table->string('header_img',250)->nullable();
            $table->longText('breif_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_title',250)->nullable();
            $table->string('meta_description',250)->nullable();
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> 81dc19414bb2edd5ac0d37e9e58fbf5e72167c9c
