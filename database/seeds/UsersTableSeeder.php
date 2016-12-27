<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodePUb\Models\User::class, 1)->create([
            'name' => 'Joao Vagmacker',
            'email' => 'joao.vagmacker@editora.com'
        ]);
    }
}
