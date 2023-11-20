<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeacherCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $imageurl,$name,$subject,$about,$facebook,$whatsapp,$email;

    public function __construct(
        $imageurl,
        $name,
        $subject,
        $about,
        $whatsapp,
        $facebook,
        $email,
        )
    {
        $this->imageurl = $imageurl;
        $this->name = $name;
        $this->subject = $subject;
        $this->about = $about;
        $this->whatsapp = $whatsapp;
        $this->facebook = $facebook;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.teacher-card');
    }
}
