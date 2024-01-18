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
        Schema::create('category_menu', function (Blueprint $table) {
            // $table->foreignId('category_id')->constrained();
            //$table->foreignId('menu_id')->constrained();
            // $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreignId('category_id')->nullable()->references('id')->on('menus')->cascadeOnDelete();
            // $table->bigInteger('menu_id')->unsigned()->nullable();
            $table->foreignId('menu_id')->nullable()->references('id')->on('menus')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_menu');
    }
};