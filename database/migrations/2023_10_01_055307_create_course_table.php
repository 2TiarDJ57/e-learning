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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosen');
            $table->foreignId('mata_kuliah_id')->constrained('mata_kuliah');
            
            $table->string('nama_course');
            $table->text('description');
            $table->string('file_tugas');
            $table->string('materi');
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
        Schema::dropIfExists('course');
    }
};
