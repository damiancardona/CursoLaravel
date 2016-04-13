<?php

use Illuminate\Database\Seeder;
use EloquentORM\User;
class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'admin',
            'gender' => 'm'
        ]);
        factory(User::class, 99)->create();
    }
}
