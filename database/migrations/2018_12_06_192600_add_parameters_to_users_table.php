<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParametersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('afc')->nullable();
            $table->decimal('amh')->nullable();
            $table->integer('homem_tem_filhos')->nullable();
            $table->integer('idadeelementofeminino')->nullable();
            $table->integer('m_etnia')->nullable();
            $table->integer('m_tabaco')->nullable();
            $table->integer('mulher_tem_filhos')->nullable();

            $table->integer('duracaoinfertilidade')->nullable();
            $table->integer('pesoelementofeminino')->nullable();
            $table->integer('imcelementofeminino')->nullable();
            $table->integer('imcelementomasculino')->nullable();
            $table->integer('idadeelementomasculino')->nullable();
            $table->integer('f_tabaco')->nullable();
            $table->integer('f_etnia')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['afc', 'amh', 'homem_tem_filhos', 'idadeelementofeminino', 'm_etnia','m_tabaco', 'mulher_tem_filhos',
            'duracaoinfertilidade', 'pesoelementofeminino', 'imcelementofeminino', 'imcelementomasculino',
            'idadeelementomasculino', 'f_tabaco', 'f_etnia', 'notes'
            ]);
        });
    }
}
