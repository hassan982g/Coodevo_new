<?php

namespace App\Livewire\Teams;

use App\Models\Team;
use Livewire\Component;

class FrontListTeams extends Component
{

    public function render()
    {
        $teams = Team::whereStatus('1')->get();
        return view('livewire.teams.front-list-teams', [
            'teams' => $teams,
        ]);

    }
}