<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Edit Portfolio') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                <form method="POST" wire:submit="save">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                            type="text" wire:model="form.name" />
                        @error('form.name')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mt-4"> 
                        <label for="photo" class="block text-sm font-medium text-gray-700">Photo (1500 * 800 recomended)</label>
                        <x-dropzone id="photo" name="photo" action="{{ route('model.storeMedia') }}" collection-name="portfolio_photo" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
                        <!-- <input wire:model="form.image" type="file" id="photo" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"> -->
                        @error('form.mediaCollections.portfolio_photo')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div> 

                    <div class="mt-4"> 
                        <label for="photos" class="block text-sm font-medium text-gray-700">Photos (500 * 500 recomended)</label>
                        <x-dropzone id="photos" name="photos" action="{{ route('model.storeMedia') }}" collection-name="portfolio_photos" max-file-size="2" max-width="4096" max-height="4096"/>
                        @error('form.mediaCollections.portfolio_photos')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mt-4">
                        <label for="excerpt" class="block text-sm font-medium text-gray-700">Excerpt</label>
                        <textarea id="excerpt" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" wire:model="form.excerpt"></textarea>
                        @error('form.excerpt')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" wire:model="form.description"></textarea>
                        @error('form.description')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label for="meta_keywords" class="block text-sm font-medium text-gray-700">Meta Keywords</label>
                        <input id="meta_keywords" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                            type="text" wire:model="form.meta_keywords" />
                        @error('form.meta_keywords')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <label for="meta_description" class="block text-sm font-medium text-gray-700">Meta
                            Description</label>
                        <input id="meta_kemeta_descriptionywords"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" type="text"
                            wire:model="form.meta_description" />
                        @error('form.meta_description')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
                        <select class="w-full" id="category_id" wire:model="form.category_id">
                            <option value="">Please select category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('form.category_id')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select class="w-full" id="status" wire:model="form.status">
                            <option value="1">Active</option>
                            <option value="0">Inactive </option>
                        </select>
                        @error('form.status')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <button
                        class="px-4 py-2 mt-4 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md hover:bg-gray-700">
                        Save Page
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>