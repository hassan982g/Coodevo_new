<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class DetailServices extends Component
{
    public ?Service $service;

    public function mount($slug): void 
    {
        $this->service = Service::whereSlug($slug)->first(); 
        if (!$this->service) {
            $this->redirect('/page-not-found', navigate: true);
        }
        $this->dispatch('updateBreadcrumTitle', $this->service->name);
    }

    public function render()
    {
        return view('livewire.services.detail-services', [
            'service' => $this->service,
            // 'all_services' => Service::where('slug', '!=', $this->service->slug)->whereStatus('1')->get(),
        ]);
    }
}
