<?php

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
        //$this->call(UserSeeder::class);
        /*App\User::create(
            [
                'name' => 'userfilm',
                'email' => 'userflim@isi2.fr',
                'password' => bcrypt('C1Secret!'),
            ]
        );*/
        factory(App\modele\Categories::class, 5)->create();
        factory(App\modele\Film::class, 20)->create();
    }
}
