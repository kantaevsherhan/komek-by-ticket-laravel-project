<x-layouts.app>

    <x-slot name="title">Главная</x-slot>

    <div class="home-page">
        <div class="movies-date-taps">
            <x-button type="red">Сегодня</x-button>
            <x-button type="white">Завтра</x-button>
            <x-button type="white">Воскресенье, 10 сент.</x-button>
            <x-button type="white">Понедельник, 11 сент.</x-button>
            <x-button type="white">Вторник, 12 сент.</x-button>
            <x-button type="white">Среда, 13 сент.</x-button>
        </div>

        <div class="movies">
            @foreach ($movies as $movie)
                <x-movie-card :movie="$movie" />
            @endforeach
        </div>
    </div>

</x-layouts.app>
