<?php

namespace App\Http\Controllers;

use App\Models\CoursesModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){
        $courses = CoursesModel::orderBy('id','DESC')->paginate(8);

        return view('courses',[
            'courses'=>$courses
        ]);
    }
}
