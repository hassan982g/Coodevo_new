<?php

namespace App\Livewire\Teams;

use App\Livewire\Forms\TeamForm;
use App\Models\Team;
use Livewire\Component;

class EditTeams extends Component
{
    public TeamForm $form;

    public array $mediaCollections = [];

    public function mount(Team $team): void 
    {
        $this->form->setPage($team); 

        $this->mediaCollections = [
            'team_photo' => $team->photo,
        ];
    }

    public function save(): void
    {
        $this->validate();
        $this->form->update(); 
        session()->flash('status', 'Team successfully updated.');
        $this->redirect('/teams');
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
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
        return view('livewire.teams.edit-teams');
    }
}
