<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a class="block px-6 py-8 bg-white border border-gray-200" href="/jobs/{{ $job['id'] }}">
                <h1 class="text-blue-500">{{ $job->employer->name }}</h1>
                <span class="font-bold">{{ $job['title'] }}</span> Pays
                {{ $job['salary'] }} per
                year.
            </a>
        @endforeach
    </div>

    {{ $jobs->links() }}
</x-layout>
