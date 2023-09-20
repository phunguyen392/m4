<?php

namespace Database\Seeders;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = new Order();
        $order->customer_name = 'Nguyễn Ngái Ngủ';
        $order->order_date = '2022/12/22';
        $order->total_amount = 22000;
        $order->save();

    }
}
