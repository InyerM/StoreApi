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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('Id', '20')->nullable(false);
            $table->string('Names', '50')->nullable(false);
            $table->string('Lastnames', '50')->nullable(false);
            $table->string('Address', '40')->nullable(true);
            $table->string('Phone', '14')->nullable(true);
            $table->string('Credit_experience', '20')->nullable(true);
            $table->timestamps();

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->primary('Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
