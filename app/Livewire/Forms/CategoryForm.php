<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category; 
    
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required')]
    public string $status = '1';


    public function setPage(Category $category): void 
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->status = $category->status;
    }

    public function save(): void
    {
        Category::create($this->all());
    }

    public function update()
    {
        $this->category->update($this->all());
    }
}
