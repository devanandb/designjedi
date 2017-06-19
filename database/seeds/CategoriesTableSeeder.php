<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Leadership',
                'slug' => 'leadership',
                'description' => 'Great UX leaders inspire world-class design. They inspire the best talent to do the best work of their careers. They speak the language of business, so they can inspire leaders and stakeholders, and show how great design both delights and monetizes.',
                'image' => 'http://cms.designjedi.co/sites/default/files/Jim-Leader-Yodel-Version-2.png',
                'featured' => true
            ],
            [
                'title' => 'Design',
                'slug' => 'design',
                'description' => 'If your product or service doesn’t delight, inspire, and engage, it’s a missed opportunity. Great design disrupts markets, from consumer electronics and gadgets, to apparel, to apps. They solve unmet and unstated user needs, and engage their users emotionally. Users love them!',
                'image' => 'http://cms.designjedi.co/sites/default/files/jdesign.jpeg',
                'featured' => true
            ],
            [
                'title' => 'Courses',
                'slug' => 'courses',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti hic unde, veritatis dolorum labore itaque quod fugit reprehenderit deleniti. Officiis!',
                'image' => 'http://cms.designjedi.co/sites/default/files/Jim-Leader-Yodel-Version-2.png',
                'featured' => false
            ],
            [
                'title' => 'Presentations',
                'slug' => 'presentations',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo accusantium explicabo, quis sint repellendus, pariatur fugit facilis unde, suscipit amet animi quod, odio iste vitae.',
                'image' => 'http://cms.designjedi.co/sites/default/files/Jim-Leader-Yodel-Version-2.png',
                'featured' => false
            ],

        ]);
    }
}
