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
        Schema::create('temans',function(Blueprint $tb){
            $tb->id();
            $tb->string('nama',50);
            $tb->string('alamat');
            $tb->string('kota',50);
            $tb->string('telp',20);
            $tb->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temans');
    }
};
