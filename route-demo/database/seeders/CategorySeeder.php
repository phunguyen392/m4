<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cate = new Category();
        $cate->name = 'bcd';
        $cate->delete_at = '2023-08-09';
        $cate->save();
    }
}
