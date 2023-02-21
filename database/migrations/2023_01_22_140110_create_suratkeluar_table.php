<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->id();
            $table->string('nomorsurat');
            $table->integer('lampiran');
            $table->string('perihal');
            $table->string('kepada');
            $table->string('di');
            $table->string('isi_surat');
            $table->date('tanggalsurat');
            $table->string('ttd_1');
            $table->string('ttd_2');
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
        Schema::dropIfExists('suratkeluar');
    }
};
