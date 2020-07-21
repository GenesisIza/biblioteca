<?php

use Carbon\Carbon;
/* Carbon es un paquete que viene integrado en la versión 5 de laravel que nos permite crear y dar formato a fechas con unos sencillos métodos. */
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //por ejemplo se puede crear los roles ojo que la tabla rol solo tiene un campo ademas del id
        $rols=[
            'administrador',
            'editor',
            'supervisor'
        ];
        //ahora pata insertar los nuevos roles en la base de datos se hace uso de la clase DB que tiene los metodos necesarios para esto, en este caso se usa el metodo estatico insert, o bien utilizando el metodo desde la misma tabla, tambien lo contiene.
        //este metodo inserta un registro a la vez por lo que para insertar todo los roles del array se debe recorrer el mismo.
        $now= Carbon::now()->toDateTimeString();
        foreach ($rols as $key => $value) {
         DB::table('rol')->insert([
                'nombre' => $value,
                'created_at'=> $now
            ]); 
        }
    }
}
