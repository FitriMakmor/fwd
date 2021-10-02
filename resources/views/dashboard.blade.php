<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{-- {{ __('Dashboard') }} --}}
            Which Insurance Suits You Best?
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body d-flex justify-content-center">
            <h4>
                Welcome, <span class="font-bold text-primary">{{ $user->name }}</span>! This insurance planner will recommend the best insurance for you, as
                proven by previous insurees.
            </h4>
        </div>
        <a href="{{ route('results') }}" class="btn btn-success start-button d-flex justify-content-center align-items-center">Get Started</a>
    </div>
</x-app-layout>
