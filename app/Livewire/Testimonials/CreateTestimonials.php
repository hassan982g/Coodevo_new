<?php

namespace App\Livewire\Testimonials;

use App\Livewire\Forms\TestimonialForm;
use Livewire\Component;

class CreateTestimonials extends Component
{
    public TestimonialForm $form;

    public function save()
    {
        $this->validate();
        $this->form->save(); 
        session()->flash('status', 'Testimonial successfully created.');
        return redirect()->to('/testimonials');

    }

    public function addMedia($media): void
    {
        $this->form->addMedia($media);
    }

    public function removeMedia($media): void
    {
        $this->form->removeMedia($media);
    }

    public function render()
    {
        return view('livewire.testimonials.create-testimonials');
    }
}
