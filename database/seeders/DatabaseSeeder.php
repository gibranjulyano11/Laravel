<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(50)->create();
        Level::factory()->create(['name'=>'Plata']);
        Level::factory()->create(['name'=>'Oro']);
        Level::factory()->create(['name'=>'Bronce']);


        /*Perfil::factory()->create(['nombre'=>'Perfil1','user:id'=>'1']);
        Perfil::factory()->create(['nombre'=>'Perfil2','user:id'=>'2']);
        Perfil::factory()->create(['nombre'=>'Perfil3','user:id'=>'3']);
 

        Location::factory()->create(['country'=>'Ecuador']);
        Location::factory()->create(['country'=>'Colombia']);
        Location::factory()->create(['country'=>'Chile']);
        */ 
    }




}
