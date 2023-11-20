<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StudentCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $imageurl,$alt,$text,$name;
    public function __construct($imageurl,$alt,$text,$name)
    {
        $this->imageurl = $imageurl;
        $this->alt = $alt;
        $this->text = $text;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-card');
    }
}
