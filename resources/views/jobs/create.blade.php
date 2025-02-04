<x-layout>
    <x-slot:heading>
        Create Page
    </x-slot:heading>


    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="pb-12 border-b border-gray-900/10">
                <h2 class="font-semibold text-gray-900 text-base/7">Create a new job</h2>
                <p class="mt-1 text-gray-600 text-sm/6">We just need a handful details from you.</p>

                <div class="grid grid-cols-1 mt-10 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block font-medium text-gray-900 text-sm/6">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center pl-3 bg-white rounded-md outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="title" id="title"
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
                                <input type="text" name="salary" id="salary"
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

        <div class="flex items-center justify-end mt-6 gap-x-6">
            <button type="button" class="font-semibold text-gray-900 text-sm/6">Cancel</button>
            <button type="submit"
                class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

</x-layout>
