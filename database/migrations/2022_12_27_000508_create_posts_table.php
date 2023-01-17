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
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->foreignId('categoryfasilitasutama_id');
            $table->foreignId('categoryfasilitasumum_id');
            $table->string('judul')->unique();
            $table->string('slug')->unique();
            $table->string('kategoritempat');
            $table->string('tipetempat');
            $table->string('alamat');
            $table->string('image')->nullable();
            $table->text('deskripsi');
            $table->string('tipetempattidur');
            $table->string('harga');

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
