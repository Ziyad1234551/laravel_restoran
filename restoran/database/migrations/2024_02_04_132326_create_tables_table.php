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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');            
            $table->string('gambar');
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->bigInteger("makanan_id")->unsigned()->nullable();
            $table->string('status')->default("tersedia");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('makanan_id')->references('id')->on('makanans')->onDelete('cascade');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
