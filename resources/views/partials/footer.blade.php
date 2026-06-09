<footer class="footer">
    <div class="top">
        <img src="{{ asset('/images/logo.svg') }}" alt="logo">

        <div class="address">
            <p class="email">admin@example.com</p>
            <p class="email">ticket@example.com</p>
            <p class="street">улица Тестовая 1</p>
        </div>

        <div class="phone">
            <p class="number">+7 (775) 000 00 01</p>
            <p class="kassa">Касса</p>
        </div>

        <div class="work-graph">
            <p class="time">08:00 - 22:00 с пн.-пт.</p>
            <p class="text">График работы</p>
        </div>
    </div>

    <div class="bottom">
        <div class="menu">
            <div class="navigations">
                <p class="title">Меню</p>

                <nav class="navigations-items">
                    <a href="#">Афиша</a>
                    <a href="#">Сеансы</a>
                    <a href="#">Пушкинская карта</a>
                    <a href="#">Кинотеатр</a>
                    <a href="#">Контакты</a>
                </nav>
            </div>

            <div class="payments">
                <p class="title">Способы оплаты:</p>

                <div class="icons">
                    <img src="{{ asset('/images/icons/master-card.svg') }}" alt="mastercard">
                    <img src="{{ asset('/images/icons/visa.svg') }}" alt="visa">
                </div>

                <div class="text">
                    <p class="subtitle">Все сеансы начинаются с рекламно-информационного блока.</p>
                    <p class="subtitle">Точную продолжительность сеансов можно уточнить в кинотеатре.</p>
                </div>
            </div>
        </div>

        <div class="copylock">
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

            <p>© 2025 Все права защищены</p>
        </div>
    </div>
</footer>
