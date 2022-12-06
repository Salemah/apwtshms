<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Admin::factory()->create([
            'name'=> 'Shahariyer Shams Jim',
            'email'=> 'jim@email.com',
            'phone'=> '1234',
            'password'=> '1234',
        ]);
    }
}
