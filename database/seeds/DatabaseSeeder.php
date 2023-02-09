<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Perfil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Perfil::insert(['nombre'=>'administrador']);
        Perfil::insert(['nombre'=>'root']);
        $this->call(UserSeeder::class);    
    }

}
