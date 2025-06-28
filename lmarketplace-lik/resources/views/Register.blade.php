<!-- Success Alert -->
@if(session('success'))
    <x-alert-succes>
        {{ session('success') }}
    </x-alert-succes>
@endif

@if(session('error'))
    <x-fail-alert>
        {{ session('error') }}
    </x-fail-alert>
@endif

<x-register/>