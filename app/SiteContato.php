<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Site_Contato
//site_contato
//site_contatos

class SiteContato extends Model
{
    //criando o fillable e dizendo quais atributos vao ser salvos no banco de dados após enviar o formuláro;
    protected $fillable = ['nome', 'telefone', 'email', 'motivo_contato', 'mensagem'];
}
