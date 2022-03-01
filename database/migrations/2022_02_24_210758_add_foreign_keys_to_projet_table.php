<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProjetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projet', function (Blueprint $table) {
            $table->foreign(['id_academicien'], 'projet_ibfk_1')->references(['id_academicien'])->on('academicien')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projet', function (Blueprint $table) {
            $table->dropForeign('projet_ibfk_1');
        });
    }
}
