<?php

namespace App\Livewire\Testimonials;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListTestimonials extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $searchQuery = '';

    public function delete(Testimonial $testimonial)
    {
      $testimonial->delete();
      session()->flash('status', 'Testimonial successfully deleted.');

    }

    public function render()
    {
        $testimonials = Testimonial::when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
                    ->simplePaginate(10);

        return view('livewire.testimonials.list-testimonials', [
          'testimonials' => $testimonials
        ]);
    }
}
