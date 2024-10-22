<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HorrorMovie;
use Carbon\Carbon;

class HorrorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();
        HorrorMovie::insert([
            ['title' => '28 Days Later',
            'description' => 'A man wakes up in a hospital during a zombie apocalypse, which he must learn to survive.',
            'year' => 2002,
            'image_url' => '28dayslater.jfif',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp],

            ['title' => 'REC',
            'description' => 'A Spanish horror film about a TV reporter and her cameraman trapped in a building with a viral outbreak. They discover a dark secret behind the infection and a demonic girl in the penthouse.',
            'year' => 2007,
            'image_url' => 'rec.jfif',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp],

            ['title' => 'Se7en',
            'description' => 'A film about two homicide detectives, and their desperate hunt for a serial killer who justifies his crimes as absolution for the ignorance of the Seven Deadly Sins.',
            'year' => 1995,
            'image_url' => 'seven.jfif',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp],

            ['title' => 'Shaun of the Dead',
            'description' => 'Shaun decides to turn his life around by getting his ex to take him back, but he times it for right in the middle of what may be a zombie apocalypse. But for him, it is an opportunity to show everyone he knows how useful he is by saving them all. All he has to do is survive, and get his ex back.',
            'year' => 2004,
            'image_url' => 'shaunofthedead.jfif',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp],

            ['title' => 'Deliver Us From Evil',
            'description' => 'New York police officer Ralph Sarchie investigates a series of crimes. He joins forces with an unconventional priest, schooled in the rites of exorcism, to combat the possessions that are terrorizing their city.',
            'year' => 2014,
            'image_url' => 'deliverusfromevil.jfif',
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp],]
        );

    }
}
