<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create(['full_name' => 'Viyonce Lexi Yazar', 'email' => 'yazar@example.com']);
        Customer::create(['full_name' => 'Marco Angelo Grageda', 'email' => 'grageda@example.com']);
        User::create(['username' => 'admin', 'full_name' => 'POS Administrator']);
        User::create(['username' => 'cashier1', 'full_name' => 'Sample Cashier']);
    }
}
