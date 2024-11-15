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
        if (Schema::hasTable('addresses')) return;

        Schema::create('addresses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('street');
            $table->text('number')->nullable();
            $table->text('cep');
            $table->text('district');
            $table->text('complement')->nullable();
            $table->text('city');
            $table->text('uf');
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
