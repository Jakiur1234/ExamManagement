<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $imageurl,$title,$description,$instructor,$subject,$totalexam,$price,$class;
    public function __construct($imageurl,$title,$description,$instructor,$totalexam,$subject,$price,$class)
    {
        $this->imageurl = $imageurl;
        $this->title = $title;
        $this->description = $description;
        $this->instructor = $instructor;
        $this->subject = $subject;
        $this->totalexam = $totalexam;
        $this->price = $price;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course-card');
    }
}
