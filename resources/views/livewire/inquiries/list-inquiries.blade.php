<div>
    @if(session('status'))
        <x-alert message="{{ session('status') }}" variant="indigo" role="alert" />
    @endif
    <div class="space-y-6">

    <div class="text-red-600" wire:loading>Loading...</div>
    <div class="min-w-full align-middle">
        <table class="min-w-full border divide-y divide-gray-200 table-auto hover:table-fixed">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">#</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Name</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span
                            class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Email</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span
                            class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Phone</span>
                    </th>
                    <th class="px-6 py-3 text-left bg-gray-50">
                        <span
                            class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Message</span>
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
                @forelse($inquiries as  $inquiry)
                    <tr class="bg-white" wire:key="{{ $inquiry->id }}">
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $inquiry->name }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $inquiry->email }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $inquiry->phone }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $inquiry->message }}
                        </td>
                        <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                            {{ $inquiry->created_at }}
                        </td>
                        <td class="p-6">
                            <a wire:click="delete({{ $inquiry->id }})"
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
                            No Inquiries were found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $inquiries->links(data: ['scrollTo' => false]) }}

    </div>
</div>
