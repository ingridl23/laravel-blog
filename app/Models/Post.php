<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model{

use HasFactory;

/**
 *        protected function casts(): array{
 *               return[
 *                     "published_at"=>"dsatetime",    //para que lo considere al campo como fecha numerica y no como string
 *                 ];
 * }
 *
 *
    //documentacion -> casting y mutadores (attributes casting)
 *
 */
/*cada vez que se almacene un registro el campo titulo se almaceara en minuscula, cambiando asi cualquier ingreso mal
escrito del usuario*/



protected function title(): Attribute
{
    return Attribute::make(
        set: fn ($value) => strtolower($value),
        get: fn ($value) => ucfirst($value),
    );
}









}
