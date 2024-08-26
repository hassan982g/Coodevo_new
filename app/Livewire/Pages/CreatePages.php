<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\PageForm;
use Livewire\Component;

class CreatePages extends Component
{
    public PageForm $form;
    public bool $success = false; 

    public function save()
    {
        $this->validate();
        $this->form->save(); 
        $this->success = true; 
        session()->flash('status', 'Page successfully created.');
        return redirect()->to('/pages');

    }

    public function render()
    {
        return view('livewire.pages.create-pages');
    }
}
