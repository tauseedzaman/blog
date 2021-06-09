<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class tageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5 ; $i++) {
            DB::table('tages')->insert([
                'name' => Str::random(10),
                'created_at' => now(),
            ]);
        }
    }
}
