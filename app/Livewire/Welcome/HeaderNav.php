<?php

namespace App\Livewire\Welcome;

use App\Livewire\Forms\ServiceForm;
use App\Models\Service;
use Livewire\Component;

class HeaderNav extends Component
{
    public function mount()
    {
    }

    public function render()
    {
        $services = Service::get(['name','slug']);
        return view('livewire.welcome.header-nav', compact('services'));
    }
}
