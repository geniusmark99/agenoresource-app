<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            AssetSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
