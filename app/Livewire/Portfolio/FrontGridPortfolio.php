<?php

namespace App\Livewire\Portfolio;

use App\Models\Category;
use App\Models\Portfolio;
use Livewire\Component;

class FrontGridPortfolio extends Component
{

    public function render()
    {
        $categories = Category::has('portfolios')->get();
        $portfolios = Portfolio::with('category:id,name,slug')->whereStatus('1')->get();
        return view('livewire.portfolio.front-grid-portfolio', [
            'categories' => $categories,
            'portfolios' => $portfolios,
        ]);

    }
}
