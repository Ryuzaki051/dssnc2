<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'CONTRERAS MIRANDA JORGE',
            'email'=>'jorge.contreras@ine.mx',
            'password'=>bcrypt('123456789')
        ]);

        User::create([
            'name'=>'MELENDEZ RAMOS ALEJANDRO',
            'email'=>'alejandro.melendez@ine.mx',
            'password'=>bcrypt('123456789')
        ]);

        User::create([
            'name'=>'CABANILLAS MARTINEZ HECTOR',
            'email'=>'hector.cabanillas@ine.mx',
            'password'=>bcrypt('123456789')
        ]);

        User::create([
            'name'=>'GRIJALVA SOLORZANO ISMAEL',
            'email'=>'ismael.grijalva@ine.mx',
            'password'=>bcrypt('123456789')
        ]);

        User::create([
            'name'=>'MIGUEL ANGEL AGUILAR ROQUE',
            'email'=>'miguel.aguilarr@ine.mx',
            'password'=>bcrypt('123456789')
        ]);

        //User::factory(5)->create();
    }
}
