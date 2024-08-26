<?php

namespace App\Livewire\Portfolio;

use App\Livewire\Forms\PortfolioForm;
use App\Models\Category;
use App\Models\Portfolio;
use Livewire\Component;

class EditPortfolios extends Component
{
    public PortfolioForm $form;
    public bool $success = false;

    public array $mediaCollections = [];


    public function mount(Portfolio $portfolio): void 
    {
        $this->form->setPage($portfolio); 
        $this->mediaCollections = [

            'portfolio_photo' => $portfolio->photo,
            'portfolio_photos' => $portfolio->photos,

        ];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    public function save(): void
    {
        $this->form->update(); 
        session()->flash('status', 'Portfolio successfully updated.');
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
        return view('livewire.portfolio.edit-portfolios', compact('categories'));
    }
}
