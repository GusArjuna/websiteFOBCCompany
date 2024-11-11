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
        Schema::create('eoqs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('demand');
            $table->integer('rop');
            $table->integer('eoqs');
            $table->timestamps();

            $table->foreign('name')->references('name')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eoqs');
    }
};
