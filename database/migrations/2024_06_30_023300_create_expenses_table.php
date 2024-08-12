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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table-> string('idEgreso',200)->notNullable();
            $table-> unsignedBigInteger('idPersona')-> notNullable();
            $table-> string('detalleEgreso',200)->nullable();
            $table-> decimal('valor_Egreso',12,2);
            $table-> enum('mes',['1','2','3','4','5','6','7','8','9','10','11','12'])->notNullable();
            $table-> string('Año', 4)->notNullable();
            $table-> unsignedBigInteger('user_id')-> notNullable();
            $table->timestamps();

            $table->foreign('idPersona')->references('idPersona')->on('people');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('idEgreso')->references('idPresupuesto')->on('bexpenses');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
