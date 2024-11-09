<?php

namespace Database\Seeders;

use App\Models\Persmission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persmission::create(['name' => 'view_book']);
        Persmission::create(['name' => 'edit_user']);
        Persmission::create(['name' => 'edit_book']);
    }
}
