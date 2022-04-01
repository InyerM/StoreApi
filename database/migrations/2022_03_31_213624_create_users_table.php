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
        Schema::create('users', function (Blueprint $table) {
            $table->Id();
            $table->string('Username', '50')->nullable(false);
            $table->string('Password', '50')->nullable(false);
            $table->string('Role', '30')->nullable(false);
            $table->string('Names', '50')->nullable(false);
            $table->string('Lastnames', '50')->nullable(false);
            $table->string('Phone', '14')->nullable(false);
            
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
        Schema::dropIfExists('users');
    }
};
