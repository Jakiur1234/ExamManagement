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
    public $imageurl,$text,$name;
    public function __construct($imageurl,$text,$name)
    {
        $this->imageurl = $imageurl;
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
