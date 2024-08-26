<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class CreateCategories extends Component
{
    public CategoryForm $form;

    public function save()
    {
        $this->validate();
        $this->form->save(); 
        session()->flash('status', 'Category successfully created.');
        return redirect()->to('/categories');

    }

    public function render()
    {
        return view('livewire.categories.create-categories');
    }
}
