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
        //QUESTA È UNA PIVOT
        Schema::create('book_category', function (Blueprint $table) {
            $table->id();
            //COllego prima la tabella libri
            $table->unsignedBigInteger('book_id');
            $table
                ->foreign('book_id')
                ->references('id')
                ->on('books');

            //COllego dopo la tabella categorie
            $table->unsignedBigInteger('category_id');
            $table
                ->foreign('category_id')
                ->references('id')
                ->on('categories');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
