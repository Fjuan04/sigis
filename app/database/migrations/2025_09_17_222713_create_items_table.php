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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->integer('stock');
            $table->date('validity')->nullable()->default(null);
            $table->text('description');
            $table->string('brand');
            // $table->string('serial');
            $table->string('place')->nullable()->default('senova');
            $table->string('photo')->nullable()->default('no-photo.png');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('item_type_id')->constrained('item_types', 'id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
