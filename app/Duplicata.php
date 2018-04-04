<?php

namespace sistemaLaravel;

use Illuminate\Database\Eloquent\Model;

class Duplicata extends Model
{
    protected $table = 'duplicata';
    protected $primaryKey = 'id_dupli';

    public $timestamps = false;

    protected $fillable = [
    'id_dupli',
    'descricao',
    'fornecedor',
    'valor',
    'data_venc'

];

    protected $guarded = [];

}
