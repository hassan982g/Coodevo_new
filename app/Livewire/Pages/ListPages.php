<?php

namespace App\Livewire\Pages;

use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
class ListPages extends Component
{
    use WithPagination, WithoutUrlPagination;

    public string $searchQuery = '';

    public function delete(Page $page)
    {
      $page->delete();
      session()->flash('status', 'Page successfully deleted.');

    }

    public function render()
    {
        $pages = Page::
          when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%')) 
        ->simplePaginate(10);

        return view('livewire.pages.list-pages', [
            'pages' => $pages
        ]);
    }
}
