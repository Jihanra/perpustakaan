<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anggotas', function(Blueprint $table){
            $table->dropColumn('kelas');
            $table->unsignedBigInteger('id_kelas')->nullable()->after('nisn');
            $table->foreign('id_kelas')->references('id')->on('classes');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anggotas', function(Blueprint $table){
            $table->string('kelas');
            $table->dropForeign(['id_kelas']);
            });
    }
}