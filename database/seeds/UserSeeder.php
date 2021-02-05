<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    // associate - save
    // save - saveMany
    // attach - detach

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
			 'name'     => 'edcel',
            'email'    => 'admin@yahoo.com',
			'password' => bcrypt('123'),
        ]);
    }
}
