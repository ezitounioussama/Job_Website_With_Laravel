<x-layout>
    <x-card>
        <div class="rounded border border-gray-200 bg-gray-50 p-10">
            <header>
                <h1 class="my-6 text-center text-3xl font-bold uppercase">
                    Manage Gigs
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>

                    @unless($listings->isEmpty())
                        @foreach ($listings as $listing)
                            <tr class="border-gray-300">
                                <td class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                                    <a href="/listings">
                                        {{ $listing->title }}
                                    </a>
                                </td>
                                <td class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                                    <a href="/listings/{{ $listing->id }}/edit" class="rounded-xl px-6 py-2 text-blue-400"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                        Edit</a>
                                </td>
                                <td class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                                    <form action="/listings/{{ $listing->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-laravel">
                                            <i class="fa-solid fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="border-gray-300">
                            <td class="border-b border-t border-gray-300 px-4 px-8 text-lg">
                                <p class="text-center">No Listings Found</p>
                            </td>
                        </tr>

                    @endunless
                </tbody>
            </table>
        </div>
    </x-card>
</x-layout>
