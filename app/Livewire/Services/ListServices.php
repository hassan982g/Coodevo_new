<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListServices extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $searchQuery = '';

    public function delete(Service $service)
    {
      $service->delete();
      session()->flash('status', 'Service successfully deleted.');

    }

    public function render()
    {
        $services = Service::when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
                    ->simplePaginate(10);

        return view('livewire.services.list-services', [
          'services' => $services
        ]);
    }
}
