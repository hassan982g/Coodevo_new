<?php

namespace App\Livewire\Forms;

use App\Models\Page;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Str;

class PageForm extends Form
{
    public ?Page $page; 
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $excerpt = '';

    #[Validate('required|min:10')]
    public string $description = '';

    #[Validate('required')]
    public string $status = '0';
    public string $meta_keywords;
    public string $meta_description;


    public function save(): void
    {
        Page::create($this->all());
    }

    public function setPage(Page $page): void 
    {
        $this->page = $page;
        $this->name = $page->name;
        $this->excerpt = $page->excerpt;
        $this->description = $page->description;
        $this->meta_keywords = $page->meta_keywords;
        $this->meta_description = $page->meta_description; 
        $this->status = $page->status;
    }

    public function update()
    {
        $this->page->update($this->all());
    }
}
