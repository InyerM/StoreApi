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
        Schema::create('credits', function (Blueprint $table) {
            $table->Id();
            $table->bigInteger('Purchase_id')->unsigned()->nullable(false);
            $table->float('Debt')->nullable(false);

            $table->foreign('Purchase_id', 'Credits_purchases_Id_fk')->references('id')->on('purchases');

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
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
        Schema::dropIfExists('credits');
    }
};
