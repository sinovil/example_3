<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('kelamin_id')->constrained('kelamins')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nama');
            $table->string('nip', 18)->nullable();
            $table->string('notelp')->nullable();
            $table->string('jabatan')->nullable();
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
        Schema::dropIfExists('operators');
    }
}