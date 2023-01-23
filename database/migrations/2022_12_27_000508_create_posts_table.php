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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('futama_id')->nullable();
            $table->foreignId('category_fasilitas_umum_id')->nullable();
            $table->string('judul')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('kategoritempat')->nullable();
            $table->string('tipetempat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('image')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('tipetempattidur')->nullable();
            $table->string('harga')->nullable();

            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
