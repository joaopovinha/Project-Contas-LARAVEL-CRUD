<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contasPagarModel extends Model
{
    protected $table = "contas_pagar";
    public $timestamps = false;
    protected $primaryKey = 'id';
}
