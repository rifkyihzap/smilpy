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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);


            $table->string('jenistmpt', 100);
            $table->string('alamat', 100);
            $table->string('jmlhfasilitas', 100);
            $table->string('plhnfasilitas', 100);
            $table->string('fasilitaslain', 100);
            $table->string('foto', 100);
            $table->string('deskripsi', 100);
            $table->string('keterangan', 100);
            $table->string('harga', 100);

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
        Schema::dropIfExists('sewas');
    }
};