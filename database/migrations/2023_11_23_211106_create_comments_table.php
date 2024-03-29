<?php

use Doctrine\DBAL\Schema\ForeignKeyConstraint;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')
            ->references('id')
            ->on('users');
            $table->unsignedBigInteger('id_post');
            $table->foreign('id_post')
            ->references('id')
            ->on('posts');
            $table->text('comment',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
