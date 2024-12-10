<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Director::insert([
            ['name' => 'Danny Boyle', 'image' => 'dannyboyle.jfif', 'bio' => 'Director of 28 Days Later.' ],
            ['name' => 'Paco Plaza', 'image' => 'pacoplaza.jfif', 'bio' => 'Director of REC.' ],
            ['name' => 'David Fincher', 'image' => 'davidfincher.jfif', 'bio' => 'Director of Se7en.' ],
            ['name' => 'Edgar Wright', 'image' => 'edgarwright.jfif', 'bio' => 'Director of Shaun of the Dead.' ],
            ['name' => 'Scott Derrickson', 'image' => 'scottderrickson.jfif', 'bio' => 'Director of Deliver Us From Evil.' ],
        ]);
    }
}
