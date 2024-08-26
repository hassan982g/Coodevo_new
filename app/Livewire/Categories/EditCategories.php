<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class EditCategories extends Component
{
    public CategoryForm $form;

    public function mount(Category $category): void 
    {
        $this->form->setPage($category);
    }

    public function save(): void
    {
        $this->validate();
        $this->form->update(); 
        session()->flash('status', 'Category successfully updated.');
        $this->redirect('/categories');
    }

    public function render()
    {
        return view('livewire.categories.edit-categories');
    }
}
