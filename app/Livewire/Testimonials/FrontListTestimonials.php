<?php

namespace App\Livewire\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class FrontListTestimonials extends Component
{

    public function render()
    {
        $testimonials = Testimonial::whereStatus('1')->get();
        return view('livewire.testimonials.front-list-testimonials', [
            'testimonials' => $testimonials,
        ]);

    }
}