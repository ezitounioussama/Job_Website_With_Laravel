<x-layout>
    <x-card class="mx-10">
        <header class="text-center">
            <h2 class="mb-1 text-2xl font-bold uppercase">
                Create a Gig
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form action="/listings" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="mb-2 inline-block text-lg">Company Name</label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="company"
                    value="{{ old('company') }}" />
                @error('company')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="mb-2 inline-block text-lg">Job Title</label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />
                @error('title')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="mb-2 inline-block text-lg">Job Location</label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />
                @error('location')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="mb-2 inline-block text-lg">Contact Email</label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="email"
                    value="{{ old('email') }}" />
                @error('email')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="mb-2 inline-block text-lg">
                    Website/Application URL
                </label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="website"
                    value="{{ old('website') }}" />
                @error('website')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="mb-2 inline-block text-lg">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="w-full rounded border border-gray-200 p-2" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags') }}" />
                @error('tags')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="mb-2 inline-block text-lg">
                    Company Logo
                </label>
                <input type="file" class="w-full rounded border border-gray-200 p-2" name="logo"
                    value="{{ old('logo') }}" />
                @error('logo')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="mb-2 inline-block text-lg">
                    Job Description
                </label>
                <textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value="{{ old('description') }}"></textarea>
                @error('description')
                    <p class="text-md m-3 text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel rounded py-2 px-4 text-white hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="ml-4 text-black"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
