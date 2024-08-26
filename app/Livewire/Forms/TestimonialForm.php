<?php

namespace App\Livewire\Forms;

use App\Models\Testimonial;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class TestimonialForm extends Form
{
    public ?Testimonial $testimonial; 
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $designation = '';

    #[Validate('required')]
    public string $status = '1';

    #[Validate('required')]
    public string $message = '';

    public array $mediaToRemove = [];
    
    public array $mediaCollections = [];

    public function setPage(Testimonial $testimonial): void 
    {
        $this->testimonial = $testimonial;
        $this->name = $testimonial->name;
        $this->message = $testimonial->message;
        $this->designation = $testimonial->designation;
        $this->status = $testimonial->status;
        $this->mediaCollections = [
            'testimonial_photo' => $testimonial->photo ?? [],
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

    protected function syncMedia($testimonial): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $testimonial->id]));
    }

    public function save(): void
    {
        $this->validate();
        $testimonial = Testimonial::create($this->all());
        $this->syncMedia($testimonial);
    }

    public function update()
    {
        $this->validate();
        $this->testimonial->update($this->all());
        $this->syncMedia($this->testimonial);
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.testimonial_photo' => [
                'required',
               // 'array',
            ],
            'mediaCollections.testimonial_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
