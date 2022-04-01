<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->Id();
            $table->bigInteger('Product_id')->unsigned()->nullable(false);
            $table->string('Person_id', '20')->nullable(false);
            $table->date('Purchase_date')->nullable(false);
            $table->integer('Discount')->nullable(true);

            $table->foreign('Product_id', 'Purchases_products_Id_fk')->references('id')->on('products');
            $table->foreign('Person_id', 'Purchases_clients_Id_fk')->references('Id')->on('clients');
            $table->timestamps();

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};
