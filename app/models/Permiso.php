<?php

namespace App\models;
//la convecion de laravel es nombre del modelo en miniscula y el nombre de la tabla mayuscula
//es mejoor tener el nombre de las tablas en pluralparaq ue automaticamente laravel lo conecte, 
//en este caso como esta en singular por naruraleza del tuto ha que decirle a laravel que tablava enlazar 
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permiso';//decirle a laravel el nombre de la tabla para el modelo
}
