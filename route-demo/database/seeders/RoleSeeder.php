<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->name = 'Nguyễn Nghi Ngút';
        $role->group_name = 'A';
        $role->save();

        $role->name = 'Nguyễn Ngạo Nghễ';
        $role->name = 'A';
        $role->save();
    }
}
