<?php
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model{
    public $timestamps = false;
    protected $table = 'pesquisa';
    protected $primaryKey = 'idpesquisa';
    protected $fillable = ['titulo','descricao'];
}