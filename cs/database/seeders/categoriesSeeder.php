<?php

namespace Database\Seeders;
use App\Models\Category1;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Category1();
        $item->name = "Máy tính";

        $item->save();
        $item = new Category1();
        $item->name = "Điện thoại";

        $item->save();
    }
}
