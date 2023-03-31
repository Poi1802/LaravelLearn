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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');

            $table->string('title');
            $table->text('content');
            $table->unsignedInteger('likes')->default(0);
            $table->string('img')->nullable();
            $table->boolean('publ')->default(1);

            /**
             * Do this
             */
            $table->foreignId('category_id')->constrained('categories');

            /**
            * Not this
            * 
            $table->unsignedBigInteger('category_id');
            $table->index('category_id', 'post_category_idx');
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
            */

            $table->timestamps();
            $table->softDeletes();
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