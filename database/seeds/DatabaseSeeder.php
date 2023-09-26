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
    { //sempre que criar uma Seed é necessário chamar atavés desse comando a Seeder criada;
        // $this->call(UsersTableSeeder::class);
        $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
        $this->call(MotivoContatoSeeder::class);
    }
}
