<?php

namespace App\Livewire\Forms;

use App\Models\Service;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class ServiceForm extends Form
{
    public ?Service $service; 
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $excerpt = '';

    #[Validate('required|min:10')]
    public string $description = '';

    #[Validate('required')]
    public string $status = '1';

    #[Validate('required')]
    public string $lni_icon = 'lni-network';

    public string $keywords;
    public string $meta_description;

    public array $mediaToRemove = [];
    
    public array $mediaCollections = [];

    public function setPage(Service $service): void 
    {
        $this->service = $service;
        $this->name = $service->name;
        $this->excerpt = $service->excerpt;
        $this->description = $service->description;
        $this->keywords = $service->keywords;
        $this->meta_description = $service->meta_description; 
        $this->status = $service->status;
        $this->lni_icon = $service->lni_icon;
        $this->mediaCollections = [
            'service_photo' => $service->photo ?? [],
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

    protected function syncMedia($service): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $service->id]));
    }

    public function save(): void
    {
        $this->validate();
        $service = Service::create($this->all());
        $this->syncMedia($service);
    }

    public function update()
    {
        $this->validate();
        $this->service->update($this->all());
        $this->syncMedia($this->service);
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.service_photo' => [
                'required',
                //'array',
            ],
            'mediaCollections.service_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
