<?php

namespace Database\Seeders;

use App\Models\CoursesModel;
use App\Models\InstructorModel;
use App\Models\StudentReview;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AllModelDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<6; $i++){
            $instructor = new InstructorModel();
            $instructor->name = $faker->name;
            $instructor->email = $faker->email;
            $instructor->whatsapp = $faker->randomDigit;
            $instructor->facebook = $faker->url('http');
            $instructor->about = $faker->paragraph;
            $instructor->image = $faker->imageUrl;
            $instructor->subject = $faker->country;
            $instructor->save();
        }
        for($i=0; $i<6; $i++){
            $review = new StudentReview();
            $review->name = $faker->name;
            $review->review = $faker->paragraph;
            $review->image = $faker->imageUrl;
            $review->save();
        }
        for($i=0; $i<45; $i++){
            $course = new CoursesModel();
            $course->course_title = $faker->sentence;
            $course->course_description = $faker->paragraph;
            $course->course_instructor = $faker->name;
            $course->instructor_subject = $faker->country;
            $course->total_exams = $faker->randomAscii;
            $course->class = $faker->randomDigitNotZero;
            $course->price = $faker->randomNumber;
            $course->currency = $faker->currencyCode;
            $course->course_cover = $faker->imageUrl;
            $course->save();
        }
     }
}
