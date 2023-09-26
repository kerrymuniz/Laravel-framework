<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando coluna motivo_contatos_id dentro da tabela site_contatos;
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        //método da classe DB que permite executar uma query no banco de dados;
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        //criação da fk e remoção da coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remoção da fk e adição da coluna  motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->Integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        //atribuição da coluna motivo_contatos_id para a coluna motivo_contato ( o contrário da operação do up() );
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');

        //remoção da coluna motivo_contatos_id dentro da tabela site_contatos;
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
    }
}
