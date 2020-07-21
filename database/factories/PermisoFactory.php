<?php
//LOS FACTORI SE LLAMAN O INVOCAN DESDE EL SEEDER DE LA TABLA CORRESPONDIENTE.
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        /* faker es una libreria que genera datos segun la funcion que le envie , por ejemplo aqui generar nombres */
        'slug' => $faker->word,
        //slug es el mismo nombre en minuscula separado con guin bajo.
    ];
});
