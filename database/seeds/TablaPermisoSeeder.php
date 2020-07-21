<?php

use App\models\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /* para invocar un factory se usa la funcion con su mismo nombre
      y esta recibe el nombre del MODELO de ese factory que se quiere ejecutar, 
      y el numero de registro que quiero crear */
      factory(Permiso::class, 127)->create();
    }
}
