<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define 10 sample testimonials
        $testimonials = [
            [
                'name' => 'John Doe',
                'title' => 'CEO',
                'description' => 'Great service!',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 5,
            ],
            [
                'name' => 'Jane Smith',
                'title' => 'Manager',
                'description' => 'Very satisfied with the quality.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 4,
            ],
            [
                'name' => 'Alice Johnson',
                'title' => 'Developer',
                'description' => 'Excellent support and friendly staff.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 5,
            ],
            [
                'name' => 'Bob Brown',
                'title' => 'Designer',
                'description' => 'Fantastic design work.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 4,
            ],
            [
                'name' => 'Charlie White',
                'title' => 'Consultant',
                'description' => 'Highly recommend.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 5,
            ],
            [
                'name' => 'Daisy Green',
                'title' => 'Analyst',
                'description' => 'Professional and timely service.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 4,
            ],
            [
                'name' => 'Eve Black',
                'title' => 'Entrepreneur',
                'description' => 'The best in the business!',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 5,
            ],
            [
                'name' => 'Frank Gray',
                'title' => 'Architect',
                'description' => 'Amazing attention to detail.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 4,
            ],
            [
                'name' => 'Grace Blue',
                'title' => 'Scientist',
                'description' => 'Innovative and forward-thinking.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 5,
            ],
            [
                'name' => 'Henry Red',
                'title' => 'Teacher',
                'description' => 'Educational and informative.',
                'image_url' => 'https://via.placeholder.com/150',
                'star_rating' => 4,
            ],
        ];

        // Insert the testimonials into the database
        DB::table('testimonials')->insert($testimonials);
    }
}
