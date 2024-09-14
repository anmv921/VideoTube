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
        Schema::create('categories',
         function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
        });

        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('id_youtube');
            $table->integer('id_user');

            $table->string('title');
            $table->string('link');

            $table->integer('view_count')
                ->default(0);
                
            $table->text('description');
            $table->timestamps();

            $table->bigInteger('category_id')
                ->unsigned();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            
            $table->foreign('id_user')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        
        Schema::dropIfExists('videos');
    }
};
