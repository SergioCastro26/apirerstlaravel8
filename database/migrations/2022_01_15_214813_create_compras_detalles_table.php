<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_detalles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idCompra');
            $table->foreign('idCompra')->references('id')->on('compras');
            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');

            $table->integer('cantidad');
            $table->float('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras_detalles');
    }
}
