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
        ]);

        // User::factory(10)->create();
        // Assets::factory(10)->create();


        // $adminUser =  User::factory()->create([
        //     'name' => 'Admin',
        //     'password' => bcrypt('admin123')
        // ]);



        // $adminRole = Role::create(['firstname' => 'admin']);
        // $adminUser->assignRole($adminRole);
    }
}
