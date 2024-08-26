<?php

namespace App\Livewire\Portfolio;

use App\Models\Portfolio;
use Livewire\Component;

class DetailPortfolios extends Component
{
    public ?Portfolio $portfolio;

    public function mount($slug): void 
    {
        $this->portfolio = Portfolio::whereSlug($slug)->first(); 
        if (!$this->portfolio) {
            $this->redirect('/page-not-found', navigate: true);
        }
        $this->dispatch('updateBreadcrumTitle', $this->portfolio->name);
    }

    public function render()
    {
        return view('livewire.portfolio.detail-portfolios', [
            'portfolio' => $this->portfolio,
        ]);
    }
}