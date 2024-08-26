<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Create Category') }}
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
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="status" wire:model="form.status">
                            <option value="1">Active</option>
                            <option value="0">Inactive </option>
                        </select>
                        @error('form.status')
                            <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                        @enderror

                    </div>

                    <button
                        class="px-4 py-2 mt-4 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md hover:bg-gray-700">
                        Save Category
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
