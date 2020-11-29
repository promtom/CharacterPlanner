<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarakterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('karakter', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('title')->nullable();
            $table->unsignedbigInteger('id_kelas')->nullable();
            $table->longText('power')->nullable();
            $table->longText('ket')->nullable();
            $table->timestamps();
        });
        Schema::table('karakter', function (Blueprint $table) {
            $table->foreign('id_kelas')
                ->references('id')->on('kelas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karakter');
    }
}
