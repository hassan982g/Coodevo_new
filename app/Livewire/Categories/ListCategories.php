<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListCategories extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $searchQuery = '';

    public function delete(Category $category)
    {
      $category->delete();
      session()->flash('status', 'Category successfully deleted.');

    }

    public function render()
    {
        $categories = Category::when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
                    ->simplePaginate(10);

        return view('livewire.categories.list-categories', [
          'categories' => $categories
        ]);
    }
}
