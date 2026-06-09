<div class="movies-card">
    <div class="image-wrapper">
        @if ($movie['imageUrl'] !== null)
            <img class="image" src="{{ asset($movie['imageUrl']) }}" alt="{{ $movie['title'] }}">
        @else
            <div class="image-skeleton">
                <img src="{{ asset('/images/icons/image.svg') }}" alt="image">
            </div>
        @endif
        @if ($movie['isPremiere'] ?? false)
            <span class="premiere-badge">ПРЕМЬЕРА</span>
        @endif
    </div>

    <h2 class="title">{{ $movie['title'] }}</h2>

    <div class="tags">
        @foreach ($movie['tags'] as $tag)
            <x-tag>{{ $tag }}</x-tag>
        @endforeach
    </div>

    <div class="sessions">
        @if (!empty($movie['sessions']))
            @foreach ($movie['sessions'] as $session)
                <div class="sessions-item">
                    <div class="details">
                        <span class="time">{{ $session['time'] }}</span>
                        <div class="options">
                            <span class="d">{{ $session['format'] }}</span>
                            <span class="price">{{ $session['price'] }} ₸</span>
                        </div>
                    </div>
                    <span class="room">{{ $session['room'] }}</span>
                </div>
            @endforeach
        @else
            <x-button type="red">Сеансы на Завтра</x-button>
        @endif
    </div>
</div>
