<?php

namespace App\Livewire\Portfolio;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListPortfolios extends Component
{
    use WithPagination, WithoutUrlPagination;

    public string $searchQuery = '';

    public function render()
    {
        $portfolios = Portfolio::
                      when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%')) 
                      ->paginate(10);

      return view('livewire.portfolio.list-portfolios', [
          'portfolios' => $portfolios
      ]);

    }

    public function delete(Portfolio $portfolio)
    {
       $portfolio->delete();
       session()->flash('status', 'Portfolio successfully deleted.');
    }
}
