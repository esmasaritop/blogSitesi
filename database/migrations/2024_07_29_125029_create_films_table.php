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
        Schema::create('films', function (Blueprint $table) {

            $table->id(); //film id
            $table->unsignedBigInteger('user_id'); //kullanıcı id-si
            $table->string('name'); //ismi
            $table->text('content'); //içerik
            $table->string('director'); //yönetmen
            $table->string('genre')->default(0)->comment('1-aksiyon, 2-animasyon, 3-belgesel, 4-bilim kurgu, 5-dram, 6-gerilim, 7-komedi, 8-korku, 9-romantik, 10-romantik komedi'); //türü
            $table->integer('duration')->unsigned(); //süresi
            $table->date('date'); //tarih
            $table->timestamps(); //olusturma ve yenileme tarihi
            $table->string('image'); //fotograf


            $table->foreign('user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
