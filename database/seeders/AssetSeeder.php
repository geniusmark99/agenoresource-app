<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;
use Illuminate\Support\Facades\Hash;


class AssetSeeder extends Seeder
{




    public function run(): void
    {
        Asset::factory()->count(5)->create();
    }
}
