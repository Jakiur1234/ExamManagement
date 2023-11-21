<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesList extends Component
{
    /**
     * Create a new component instance.
     */
    public $text,$imageurl,$duration;
    public function __construct($text,$imageurl,$duration)
    {
        $this->duration = $duration;
        $this->text = $text;
        $this->imageurl = $imageurl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-list');
    }
}
