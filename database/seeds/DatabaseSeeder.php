<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//for run this script and fill the tables:
    //php artisan db:seed
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTablas([
            'rol'
        ]);
     $this->call(TablaRolSeeder::class);
     $this->call(TablaPermisoSeeder::class);
    }
    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
