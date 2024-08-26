<?php

namespace App\Livewire\Services;

use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Livewire\Component;

class EditServices extends Component
{
    public ServiceForm $form;

    public array $mediaCollections = [];

    public function mount(Service $service): void 
    {
        $this->form->setPage($service); 

        $this->mediaCollections = [
            'service_photo' => $service->photo,
        ];
    }

    public function save(): void
    {
        $this->validate();
        $this->form->update(); 
        session()->flash('status', 'Service successfully updated.');
        $this->redirect('/services');
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
        return view('livewire.services.edit-services');
    }
}
