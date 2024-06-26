<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg text-center mt-10">{{ $job['title'] }}</h2>

    <p class="text-center"> 
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>