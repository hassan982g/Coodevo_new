<?php

namespace App\Livewire\Testimonials;

use App\Livewire\Forms\TestimonialForm;
use App\Models\Testimonial;
use Livewire\Component;

class EditTestimonials extends Component
{
    public TestimonialForm $form;

    public array $mediaCollections = [];

    public function mount(Testimonial $testimonial): void 
    {
        $this->form->setPage($testimonial); 

        $this->mediaCollections = [
            'testimonial_photo' => $testimonial->photo,
        ];
    }

    public function save(): void
    {
        $this->validate();
        $this->form->update(); 
        session()->flash('status', 'Testimonial successfully updated.');
        $this->redirect('/testimonials');
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
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
        return view('livewire.testimonials.edit-testimonials');
    }
}
