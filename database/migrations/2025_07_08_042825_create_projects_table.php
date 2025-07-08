<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
        public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('main_image')->nullable();
            $table->string('subimage1')->nullable();
            $table->string('subimage2')->nullable();
            $table->date('started_date')->nullable();
            $table->date('completed_date')->nullable();
            $table->string('client')->nullable();
            $table->string('type')->nullable();
            $table->string('location')->nullable();
            $table->json('technologies_used')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
