<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freelances', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('job');
            $table->string('image');
            $table->decimal('rating', 2, 1);
            $table->integer('reviews');

            $table->json('skills');

            $table->text('description');

            $table->integer('projects');
            $table->string('experience');
            $table->string('success');

            $table->integer('price');

            $table->string('color');
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freelances');
    }
};
