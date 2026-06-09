<x-layouts.app>

    <x-slot name="title">Главная</x-slot>

    <div class="home-page">
        <div class="movies-date-tabs">
            <x-button variant="red">Сегодня</x-button>
            <x-button variant="white">Завтра</x-button>
            <x-button variant="white">Воскресенье, 10 сент.</x-button>
            <x-button variant="white">Понедельник, 11 сент.</x-button>
            <x-button variant="white">Вторник, 12 сент.</x-button>
            <x-button variant="white">Среда, 13 сент.</x-button>
        </div>

        <div class="movies">
            @foreach ($movies as $movie)
                <x-movie-card :movie="$movie" />
            @endforeach
        </div>
    </div>

</x-layouts.app>
