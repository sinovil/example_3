<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('users_id')->constrained('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('jenispengaduan_id')->constrained('jenispengaduans')->onDelete('restrict')->onUpdate('restrict');
            $table->string('nama_terlapor');
            $table->string('nip_terlapor', 18)->nullable();
            $table->date('tgl_kejadian');
            $table->string('waktu_kejadian');
            $table->string('lokasi_kejadian');
            $table->string('kronologis_kejadian');
            $table->string('file_bukti');
            $table->enum('status', ['0', 'proses', 'selesai']);
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
        Schema::dropIfExists('pengaduans');
    }
}