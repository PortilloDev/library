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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('description');
            $table->unsignedBigInteger('platform_id');
            $table->unsignedBigInteger('category_id');
            $table->string('img')->nullable();
            $table->boolean('do')->default(false);
            $table->string('link')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->foreign('platform_id')
                ->references('id')
                ->on('platforms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
