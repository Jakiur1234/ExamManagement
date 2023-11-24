<?php

namespace App\Http\Controllers;

use App\Models\InstructorModel;
use App\Models\StudentReview;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $instructors = InstructorModel::all();
        $reviews = StudentReview::all();

        return view('home',[
            'instructors'=>$instructors,
            'reviews'=>$reviews
        ]);
    }
}
