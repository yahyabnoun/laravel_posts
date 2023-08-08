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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id')->default(2);
            $table->foreign('post_id')->references('id')->on('posts');
            $table->unsignedBigInteger('tag_id')->default(2);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
