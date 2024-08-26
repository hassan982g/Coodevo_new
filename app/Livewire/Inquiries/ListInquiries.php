<?php

namespace App\Livewire\Inquiries;

use App\Models\Inquiry;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ListInquiries extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $searchQuery = '';
    public function render()
    {
        $inquiries = Inquiry::
        when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%')) 
      ->simplePaginate(10);

        return view('livewire.inquiries.list-inquiries', [
            'inquiries' => $inquiries
        ]);
    }

    public function delete(Inquiry $inquiry)
    {
      $inquiry->delete();
      session()->flash('status', 'Inquiry successfully deleted.');

    }
}
