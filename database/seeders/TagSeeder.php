<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'Python', 'icon' => 'fa-brands fa-python'],
            ['name' => 'PHP', 'icon' => 'fa-brands fa-php'],
            ['name' => 'Java', 'icon' => 'fa-brands fa-java'],
            ['name' => 'Database', 'icon' => 'fa-brands fa-database'],
            ['name' => 'Matemática', 'icon' => 'fa-brands fa-calculator'],
            ['name' => 'Português', 'icon' => 'fa-brands fa-book-open'],
            ['name' => 'Geografia', 'icon' => 'fa-brands fa-earth-americas'],
            ['name' => 'Física', 'icon' => 'fa-brands fa-atom'],
            ['name' => 'Química', 'icon' => 'fa-brands fa-flask'],
            ['name' => 'Biologia', 'icon' => 'fa-brands fa-leaf'],
            ['name' => 'Educação Física', 'icon' => 'fa-brands fa-person-running'],
            ['name' => 'Artes', 'icon' => 'fa-brands fa-paintbrush'],
            ['name' => 'História', 'icon' => 'fa-brands fa-landmark'],
            ['name' => 'HTML', 'icon' => 'fa-brands fa-html5'],
            ['name' => 'CSS', 'icon' => 'fa-brands fa-css3-alt'],
            ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
            ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel'],
            ['name' => 'Vue.js', 'icon' => 'fa-brands fa-vuejs'],
            ['name' => 'React', 'icon' => 'fa-brands fa-react'],
            ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt'],
            ['name' => 'Linux', 'icon' => 'fa-brands fa-linux'],
            ['name' => 'APIs', 'icon' => 'fa-solid fa-diagram-next'],
            ['name' => 'Redes', 'icon' => 'fa-solid fa-tower-cell'],
            ['name' => 'AWS', 'icon' => 'fa-solid fa-cloud'],
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag['name'],
                'icon' => $tag['icon'],
            ]);
        }
    }
}
