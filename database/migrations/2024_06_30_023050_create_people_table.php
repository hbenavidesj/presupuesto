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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table-> enum('type',['persona natural', 'empresa'])->notNullable();
            $table-> enum('document_Type',['cc','TI','Pasaporte', 'Nit', 'Rc']) ->notNullable();
            $table-> unsignedBigInteger('idPersona')-> unique();
            $table-> string('Name',100)->notNullable();
            $table-> string('Adress', 100)->notNullable();
            $table-> string('telefono',20)->notNullable();
            $table-> string('email',100)->notNullable();
            $table-> unsignedBigInteger('user_id')-> notNullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
