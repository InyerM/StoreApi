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
        Schema::create('products', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';

            $table->Id();
            $table->string('Name', '30')->nullable(false);
            $table->string('Description', '150')->nullable(true);
            $table->float('Purchase_value')->nullable(false);
            $table->float('Sales_value')->nullable(false);
            $table->integer('Stocks')->nullable(false);
            $table->string('Type', '30')->nullable(false);
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
        Schema::dropIfExists('products');
    }
};
