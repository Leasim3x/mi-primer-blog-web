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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')
            ->references('id')
            ->on('categories');
            $table->string('title',100);
            $table->text('content',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
