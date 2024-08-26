<?php

namespace App\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class FrontListServices extends Component
{

    public $services = null;

    public function mount($slug = null): void 
    {
        if ($slug)
            $this->services = Service::where('slug', '!=', $slug)->get();
        else
            $this->services = Service::whereStatus('1')->get();
    }

    public function render()
    {
        return view('livewire.services.front-list-services', [
            'services' => $this->services,
        ]);

    }
}