<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('sales', function (Blueprint $table) {
        $table->id();
        $table->string('external_id')->unique(); // ID из внешнего API
        $table->string('product_name');
        $table->string('product_id');
        $table->integer('quantity');
        $table->decimal('price', 10, 2);
        $table->decimal('total', 10, 2);
        $table->date('date');
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
        Schema::dropIfExists('sales');
    }
}
