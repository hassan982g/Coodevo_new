<?php

namespace App\Livewire\Portfolio;

use App\Models\Category;
use App\Models\Portfolio;
use Livewire\Component;

class FrontListPortfolios extends Component
{
    public $portfolios = null;

    public function mount($slug = null): void 
    {
        if ($slug)
            $this->portfolios = Portfolio::with('category:id,name,slug')->where('slug', '!=', $slug)->get();
        else
            $this->portfolios = Portfolio::with('category:id,name,slug')->whereStatus('1')->get();
    }

    public function render()
    {
        $categories = Category::has('portfolios')->get();
        // $portfolios = Portfolio::with('category:id,name,slug')->whereStatus('1')->get();
        return view('livewire.portfolio.front-list-portfolios', [
            'categories' => $categories,
            'portfolios' => $this->portfolios,
        ]);

    }
}
