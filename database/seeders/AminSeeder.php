<?php

namespace Database\Seeders;
use App\Models\Admin;

use Illuminate\Database\Seeder;

class AminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory(1)->create();
    }
}
