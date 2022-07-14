<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained('users')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nik', 16);
            $table->string('nama', 50);
            $table->foreignId('kelamin_id')->constrained('kelamins')->onDelete('restrict')->onUpdate('restrict');
            $table->string('notelp', 15);
            $table->string('alamat');
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
        Schema::dropIfExists('masyarakats');
    }
}