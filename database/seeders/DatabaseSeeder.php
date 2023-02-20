<?php

namespace Database\Seeders;

use Database\Factories\EstudioFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // para ejecutar una semilla, antes de seguir, hay que especificar el nombre 
        // de la tabla pretected en el model creado por ultimo se trae el factory creado
        EstudioFactory::factoryForModel('estudio')->count(10)->create();
    }
}
