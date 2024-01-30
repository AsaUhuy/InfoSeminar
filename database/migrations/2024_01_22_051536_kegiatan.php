<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $table){
            $table->id();
            $table->string('namaKegitan');
            $table->unsignedBigInteger('jenis_id'); // Menggunakan unsignedBigInteger untuk foreign key
            $table->string('temaKegiatan');
            $table->date('tanggalPelaksanaan');
            $table->string('narasumber1');
            $table->string('instansiNarasumber1');
            $table->string('narasumber2');
            $table->string('instansiNarasumber2');
            $table->string('moderator');
            $table->string('bgsertifikat');
            $table->string('namaTTDser1');
            $table->string('instansiTTDser1');
            $table->string('namaTTDser2');
            $table->string('instansiTTDser2');
            $table->date('tanggalSertifikat');
            $table->timestamps();

            $table->foreign('jenis_id')->references('id')->on('jeniskegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tbkegiatan');
    }
};
