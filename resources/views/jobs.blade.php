<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <ul class="flex flex-col justify-center items-center space-y-2 my-10">
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>