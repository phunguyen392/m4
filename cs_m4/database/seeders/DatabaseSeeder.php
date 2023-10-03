<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\Group;
use App\Models\GroupRole;
use App\Models\User;





// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    $this->call(CategorySeeder::class);
    $this->call(ProductSeeder::class);
    $this->call(RoleSeeder::class);
    $this->call(GroupSeeder::class);
    $this->call(GroupRoleSeeder::class);
    $this->call(UserSeeder::class);


    }
}
