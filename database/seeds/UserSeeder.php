<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Perfil;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        
        $data=factory(User::class,50)->create();
        DB::table('users')->insert(array('name'=>'andres loaiza','email'=>'andresloaiza722@gmail.com','password'=>'$2y$10$f6Wt75WBBIX6vkf6ReAteO4IcITop2IC7AeDwQs3jCsRbLaZwixX2','perfil_id'=>1,'created_at'=>date('Y-m-d H:i:s'),'updated_at'=>date('Y-m-d H:i:s')));
        
        
    }
}
