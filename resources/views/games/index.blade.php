<x-layout>
    <h1>Games section</h1>
    @if($greeting)
        <p>Welcome to the game section</p>
    @endif

    <h2>Games I am playing right now</h2>
    <h3>Games are as follows:</h3>
    <ul>
        @foreach($games as $game)
            <li>
                <x-card href="/games/{{ $game['id'] }}" :highlight="$game['name'] == 'Balatro'">
                    <h3>{{ $game['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>