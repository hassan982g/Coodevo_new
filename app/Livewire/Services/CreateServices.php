<?php

namespace App\Livewire\Services;

use App\Livewire\Forms\ServiceForm;
use Livewire\Component;

class CreateServices extends Component
{
    public ServiceForm $form;
    public bool $success = false; 

    public function save()
    {
        $this->validate();
        $this->form->save(); 
        $this->success = true; 
        session()->flash('status', 'Service successfully created.');
        return redirect()->to('/services');

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
        return view('livewire.services.create-services');
    }
}
