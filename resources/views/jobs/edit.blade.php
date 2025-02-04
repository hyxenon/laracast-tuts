<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>


    <form method="POST" action="/jobs/{{ $job->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input value="{{ $job->title}}" type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Shift Leader">
                            </div>
                            @error('title')
                            <p class="text-sm font-semibold text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block font-medium text-gray-900 text-sm/6">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input value="{{ $job->salary}}" type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$50,000 per year">
                            </div>
                        </div>
                        @error('salary')
                        <p class="text-sm font-semibold text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>

        </div>

        <div class="flex items-center justify-between mt-6 gap-x-6">

            <div class="flex items-center">
                <button form="delete-form" class="text-sm font-bold text-red-500">Delete</button>
            </div>

            <div class="space-x-4">
                <a href="/jobs/{{ $job->id}}" class="font-semibold text-gray-900 text-sm/6">Cancel</a>
                <button type="submit"
                    class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>

        </div>
    </form>

    <form id="delete-form" class="hidden" method="POST" action="/jobs/{{ $job->id  }}">
        @csrf
        @method('DELETE')
    </form>

</x-layout>