<?php

namespace App\Livewire\Teams;

use App\Livewire\Forms\TeamForm;
use Livewire\Component;

class CreateTeams extends Component
{
    public TeamForm $form;

    public function save()
    {
        $this->validate();
        $this->form->save(); 
        session()->flash('status', 'Team successfully created.');
        return redirect()->to('/teams');

    }

    public function addMedia($media): void
    {
        $this->form->addMedia($media);
    }

    public function removeMedia($media): void
    {
        $this->form->removeMedia($media);
    }

    public function render()
    {
        return view('livewire.teams.create-teams');
    }
}
