<?php
use Illuminate\Database\Eloquent\Model;

class Envio extends Model{
    public $timestamps = false;
    protected $table = 'envio';
    protected $primaryKey = 'idenvio';
    protected $fillable = ['idpesquisa','idcliente','dataenvio'];
}