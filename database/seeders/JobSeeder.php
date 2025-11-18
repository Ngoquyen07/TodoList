<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusList = [0, 1, 2, 3]; // Active, Drop, Done, Destroy

        for ($i = 1; $i <= 20; $i++) {

            DB::table('jobs')->insert([
                'name' => 'Job ' . $i,
                'description' => Str::random(50),
                'status' => $statusList[array_rand($statusList)],
                'is_deleted' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
