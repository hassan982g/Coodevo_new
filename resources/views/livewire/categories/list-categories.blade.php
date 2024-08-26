<div>
    @if(session('status'))
        <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
    @endif
    <div class="space-y-6">

    <div class="flex justify-between">

    <div class="space-x-8"> 
        <input wire:model.live="searchQuery" type="search" id="search" placeholder="Search...">
    </div> 

        <a wire:navigate href="{{ route('categories.create') }}"
            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md">
            Add new category
        </a>
    </div>

    <div class="text-red-600" wire:loading>Loading...</div>
    <div class="min-w-full align-middle">
        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">#</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span
                            class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Name</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span
                            class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Slug</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Created
                            AT</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                @forelse($categories as  $category)
                    <tr class="bg-white" wire:key="{{ $category->id }}">
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $category->name }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $category->slug }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $category->created_at }}
                        </td>

                        <td>
                            <a href="{{ route('categories.edit', $category) }}"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md">
                                Edit
                            </a>
                            <a wire:click="delete({{ $category->id }})"
                                onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                                href="#"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-red-600 rounded-md">
                                Delete
                            </a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 text-sm" colspan="3">
                            No Categories were found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $categories->links(data: ['scrollTo' => false]) }}

    </div>
</div>