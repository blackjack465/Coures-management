<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Seed some initial courses
        $courses = [
            [
                'title' => 'Introduction to Programming',
                'instructor' => 'John Doe',
                'courseHead' => 'Jane Smith',
            ],
            [
                'title' => 'Web Development Basics',
                'instructor' => 'Alice Johnson',
                'courseHead' => 'Bob Brown',
            ],
            [
                'title' => 'Data Structures and Algorithms',
                'instructor' => 'Michael Thompson',
                'courseHead' => 'Emily Davis',
            ],
            [
                'title' => 'Machine Learning Fundamentals',
                'instructor' => 'Chris Anderson',
                'courseHead' => 'Sophia White',
            ],
            [
                'title' => 'Graphic Design Essentials',
                'instructor' => 'Eva Martinez',
                'courseHead' => 'Daniel Harris',
            ],
            // Add more courses as needed
        ];

        // Insert the courses into the database
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
