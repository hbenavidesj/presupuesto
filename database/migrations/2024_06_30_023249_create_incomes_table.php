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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table-> unsignedBigInteger('idPersona')-> notNullable();
            $table-> string('detalleIngreso',200)->nullable();
            $table-> decimal('valor_Ingreso',12,2);
            $table-> enum('mes',['1','2','3','4','5','6','7','8','9','10','11','12'])->NotNullable();
            $table-> string('Año', 4)->NotNullable();
            $table-> unsignedBigInteger('user_id')-> notNullable();
            $table-> string('idIngreso',200)->notNullable();
            $table->timestamps();
           
            $table->foreign('idPersona')->references('idPersona')->on('people');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('idIngreso')->references('idPresupuesto')->on('bincomes');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
