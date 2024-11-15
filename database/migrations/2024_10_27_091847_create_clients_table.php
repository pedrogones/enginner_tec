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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('address_id');
            $table->date('birthdate');
            $table->text('phone');
            $table->enum('gender', ['male', 'female']);
            $table->enum('type_contact', ['telefoneResidencial', 'telefoneCelular', 'telefoneComercial']);


            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id', 'client_user_id_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('address_id', 'clients_address_id_idx')
                ->references('id')->on('addresses')
                ->onDelete('no action')
                ->onUpdate('no action');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
