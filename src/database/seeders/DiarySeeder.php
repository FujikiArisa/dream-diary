<?php

namespace Database\Seeders;

use App\Models\Diary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diary::truncate();
        for ($i = 0; $i < 10; ++$i) {
            Diary::create([
                'user_id'   => 1,
                'date'      => date("Y-m-d", strtotime("now - {$i} day")),
                'time'      => rand(1, 4),
                'kind'      => rand(1, 3),
                'title'     => \Faker\Factory::create()->realText(20),
                'text'      => \Faker\Factory::create()->realText(),
            ]);
        }
    }
}
