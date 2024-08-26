<?php

namespace App\Livewire\Teams;

use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ListTeams extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $searchQuery = '';

    public function delete(Team $team)
    {
      $team->delete();
      session()->flash('status', 'Team successfully deleted.');

    }

    public function render()
    {
        $teams = Team::when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%'))
                    ->simplePaginate(10);

        return view('livewire.teams.list-teams', [
          'teams' => $teams
        ]);
    }
}
