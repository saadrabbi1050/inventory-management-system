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
        Schema::create('product_transjection', function (Blueprint $table) {
            $table->id();
            $table->string('store_id');
            $table->string('rack_id');
            $table->string('box_id');
            $table->string('product_id');
            $table->string('qty');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transjection');
    }
};
