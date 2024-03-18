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
        Schema::create('collegesettings', function (Blueprint $table) {
            $table->id();
            $table->string('collegename');
            $table->string('affiliate');
            $table->string('address');
            $table->string('since');
            $table->string('mail1');
            $table->string('mail2');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('map');
            $table->string('logo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collegesettings');
    }
};
