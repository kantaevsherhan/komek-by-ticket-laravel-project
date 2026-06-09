<header class="header">
    <div class="top">
        <img src="{{ asset('/images/logo.svg') }}" alt="logo">

        <div class="address">
            <p class="city">Казахстан</p>
            <p class="street">улица Тестовая 1</p>
        </div>

        <div class="phone">
            <p class="number">+7 (775) 000 00 01</p>
            <p class="kassa">Касса</p>
        </div>

        <nav class="socials">
            <a href="#">
                <img src="{{ asset('/images/icons/facebook.svg') }}" alt="facebook">
            </a>

            <a href="#">
                <img src="{{ asset('/images/icons/instagram.svg') }}" alt="instagram">
            </a>

            <a href="#">
                <img src="{{ asset('/images/icons/youtube.svg') }}" alt="youtube">
            </a>

            <a href="#">
                <img src="{{ asset('/images/icons/vk.svg') }}" alt="vk">
            </a>
        </nav>

        <x-button variant="red">
            Мне пришёл билет
        </x-button>
    </div>

    <div class="bottom">
        <nav class="navigations">
            <a href="#" class="active">Афиша</a>
            <a href="#">Сеансы</a>
            <a href="#">Кинотеатр</a>
            <a href="#">Контакты</a>
        </nav>

        <x-button variant="red">
            Войти
        </x-button>

        <x-button variant="red">
            Написать отзыв
        </x-button>
    </div>
</header>
