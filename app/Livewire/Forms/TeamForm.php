<?php

namespace App\Livewire\Forms;

use App\Models\Team;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class TeamForm extends Form
{
    public ?Team $team; 
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $designation = '';

    #[Validate('required')]
    public string $status = '1';

    public array $mediaToRemove = [];
    
    public array $mediaCollections = [];

    public function setPage(Team $team): void 
    {
        $this->team = $team;
        $this->name = $team->name;
        $this->designation = $team->designation;
        $this->status = $team->status;
        $this->mediaCollections = [
            'team_photo' => $team->photo ?? [],
        ];
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $mediaItem = Media::where('uuid', $media['uuid'])->first();
        $mediaItem->delete();

        $this->mediaCollections = [];

    }

    protected function syncMedia($team): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $team->id]));
    }

    public function save(): void
    {
        $this->validate();
        $team = Team::create($this->all());
        $this->syncMedia($team);
    }

    public function update()
    {
        $this->validate();
        $this->team->update($this->all());
        $this->syncMedia($this->team);
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.team_photo' => [
                'required',
            ],
            'mediaCollections.team_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
