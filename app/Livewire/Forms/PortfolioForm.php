<?php

namespace App\Livewire\Forms;

use App\Models\Portfolio;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PortfolioForm extends Form
{

    public ?Portfolio $portfolio; 
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $description = '';

    #[Validate('required')]
    public string $status = '0';

    #[Validate('required')]
    public string $category_id = '';

    public null|string $excerpt = '';
    public null|string $meta_keywords = '';
    public null|string $meta_description = '';

    // #[Validate('required|file|mimes:jpg,jpeg,png|max:1024')]
    // public $image;

    public array $mediaToRemove = [];

    public array $mediaCollections = [];


    public function setPage(Portfolio $portfolio): void 
    {
        $this->portfolio = $portfolio;
        $this->name = $portfolio->name;
        $this->excerpt = $portfolio->excerpt;
        $this->description = $portfolio->description;
        $this->meta_keywords = $portfolio->meta_keywords;
        $this->meta_description = $portfolio->meta_description; 
        $this->status = $portfolio->status;
        $this->category_id = $portfolio->category_id ?? '';
    }

    public function addMedia($media)
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $mediaItem = Media::where('uuid', $media['uuid'])->first();
        $mediaItem->delete();

    }

    protected function syncMedia($portfolio): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
                ->update(['model_id' => $portfolio->id]));
    }


    public function save(): void
    {
       $this->validate();
       $portfolio = Portfolio::create($this->all()); 
       $this->syncMedia($portfolio);

    
    }

    public function update()
    {
        $this->validate();
        $this->portfolio->update($this->all());
        $this->syncMedia($this->portfolio);
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.portfolio_photo' => [
                'array',
                'nullable',
            ],
            'mediaCollections.portfolio_photo.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'mediaCollections.portfolio_photos' => [
                'array',
                'nullable',
            ],
            'mediaCollections.portfolio_photos.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
