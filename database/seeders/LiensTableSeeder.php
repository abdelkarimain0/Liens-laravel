<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lien;

class LiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Database\Eloquent\Model::unguard();

        Lien::factory()->count(6)->create();
    }
}
