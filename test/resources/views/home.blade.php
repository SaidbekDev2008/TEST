<x-layouts.menu>
    <x-slot:title>
        Home
    </x-slot:title>
    <x-layouts.navbar></x-layouts.navbar>
    <x-layouts.teachers></x-layouts.teachers>

    @auth
        @php
            $teacher = Auth::user()->roles()->where('name', 'teacher')->exists();
        @endphp

        @if ($teacher)
            <form action="{{ route('send', Auth::user()) }}" method="POST">
                @csrf
                <button type="submit">StudentsSendTestCode</button>
            </form>
        @endif
    @endauth
</x-layouts.menu>
