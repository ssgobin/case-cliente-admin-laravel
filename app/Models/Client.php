<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'data_cadastro', 'renda_familiar'];
    public $timestamps = false;
}
