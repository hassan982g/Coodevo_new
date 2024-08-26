<?php

namespace App\Livewire\Pages;

use App\Livewire\Forms\PageForm;
use App\Models\Page;
use Livewire\Component;

class EditPages extends Component
{

    public PageForm $form;
    public function mount(Page $page): void 
    {
        $this->form->setPage($page); 
    }

    public function save(): void
    {
        $this->validate();
        $this->form->update(); 
        session()->flash('status', 'Page successfully updated.');
        $this->redirect('/pages');
    }

    public function render()
    {
        return view('livewire.pages.edit-pages');
    }
}
