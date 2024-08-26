<div>
    @if(session('status'))
        <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
    @endif
    <div class="space-y-6">

    <div class="flex justify-between">

    <div class="space-x-8"> 
        <input wire:model.live="searchQuery" type="search" id="search" placeholder="Search...">
    </div> 

        <a href="{{ route('teams.create') }}"
            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md">
            Add new Team
        </a>
    </div>

    <div class="text-red-600" wire:loading>Loading...</div>
    <div class="min-w-full align-middle">
        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">
                            #
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">
                            Name
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">
                            Designation
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">
                            Status
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">
                            Created AT
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                @forelse($teams as  $team)
                    <tr class="bg-white" wire:key="{{ $team->id }}">
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $team->name }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $team->designation }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $team->status }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $team->created_at }}
                        </td>

                        <td>
                            <a href="{{ route('teams.edit', $team) }}"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase bg-gray-800 rounded-md">
                                Edit
                            </a>
                            <a wire:click="delete({{ $team->id }})"
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
                            No Teams were found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $teams->links(data: ['scrollTo' => false]) }}

    </div>
</div>