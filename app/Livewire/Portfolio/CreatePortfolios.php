<?php

namespace App\Livewire\Portfolio;

use App\Livewire\Forms\PortfolioForm;
use App\Models\Category;
use Livewire\Component;

class CreatePortfolios extends Component
{
    public PortfolioForm $form;
    public bool $success = false;

    public function save(): void
    {
        $this->form->save(); 
        session()->flash('status', 'Portfolio successfully created.');
        $this->redirect('/portfolio');
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
        $categories = Category::get();
        return view('livewire.portfolio.create-portfolios', compact('categories'));
    }
}
