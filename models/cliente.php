<?php
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    public $timestamps = false;
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $fillable = ['nome','email','noventena'];
}