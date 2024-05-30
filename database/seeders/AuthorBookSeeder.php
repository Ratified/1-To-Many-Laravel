<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create authors
        $jordan = Author::create(['name' => 'Jordan Peterson']);
        $corey = Author::create(['name' => 'Corey Wayne']);
        $robert = Author::create(['name' => 'Robert Greene']);

        // Create books for each author
        $jordan->books()->createMany([
            ['title' => '12 Rules for Life', 'description' => 'An antidote to chaos'],
            ['title' => 'Maps of Meaning', 'description' => 'The architecture of belief']
        ]);

        $corey->books()->createMany([
            ['title' => 'How To Be A 3% Man', 'description' => 'Winning the heart of the woman of your dreams'],
            ['title' => 'Mastering Yourself', 'description' => 'How to align your life with your true calling and reach your full potential']
        ]);

        $robert->books()->createMany([
            ['title' => 'The 48 Laws of Power', 'description' => 'A definitive guide to power'],
            ['title' => 'The Art of Seduction', 'description' => 'The indispensable handbook of seduction']
        ]);
    }
}
