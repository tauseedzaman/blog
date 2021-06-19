<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(tageSeeder::class);
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'tauseedzaman',
            'email' => 'tauseedzaman@test.com',
            'password' => bcrypt('tauseedzaman'),
            'is_admin' => true
        ]);
    }
}
