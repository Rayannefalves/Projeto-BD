<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
   protected $table = 'produto';

   protected $primaryKey = 'id';

   public $timestamps = false;

   protected $fillable = [
       'nome',
       'descricao',
       'preco',
       'url',
   ];
}
