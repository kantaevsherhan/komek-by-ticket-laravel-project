<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', [
        'movies' => [
            [
                'title' => 'Праздники',
                'imageUrl' => '/images/movies/1.jpg',
                'tags' => ['комедия'],
                'isPremiere' => false,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => 1233, 'room' => 'Зал 3'],
                    ['time' => '17:40', 'format' => '2D', 'price' => 3080, 'room' => 'Зал 6 VIP'],
                    ['time' => '19:15', 'format' => '2D', 'price' => 1700, 'room' => 'Зал 4'],
                    ['time' => '21:05', 'format' => '2D', 'price' => 1700, 'room' => 'Зал 3'],
                    ['time' => '21:40', 'format' => '2D', 'price' => 4030, 'room' => 'Зал 6 VIP'],
                    ['time' => '22:45', 'format' => '2D', 'price' => 1700, 'room' => 'Зал 3'],
                ],
            ],
            [
                'title' => 'Мег 2: Бездна',
                'imageUrl' => '/images/movies/2.jpg',
                'tags' => ['экшен', 'триллер'],
                'isPremiere' => false,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => 4030, 'room' => 'Зал 6 VIP'],
                    ['time' => '17:40', 'format' => '2D', 'price' => 3080, 'room' => 'Зал 2 Auro'],
                    ['time' => '19:15', 'format' => '2D', 'price' => 1700, 'room' => 'Зал 4'],
                ],
            ],
            [
                'title' => 'Заложники',
                'imageUrl' => '/images/movies/3.jpg',
                'tags' => ['экшен', 'триллер'],
                'isPremiere' => false,
                'sessions' => [
                    ['time' => '16:10', 'format' => '2D', 'price' => 4030, 'room' => 'Зал 1'],
                    ['time' => '21:30', 'format' => '2D', 'price' => 3080, 'room' => 'Зал 1'],
                ],
            ],
            [
                'title' => 'Леди Баг и Супер-Кот: Пробуждение силы',
                'imageUrl' => '/images/movies/4.jpg',
                'tags' => ['фэнтези', 'боевик', 'мультфильм', 'комедия', 'мелодрама'],
                'isPremiere' => false,
                'sessions' => [
                    ['time' => '16:10', 'format' => '2D', 'price' => 4030, 'room' => 'Зал 1'],
                    ['time' => '21:30', 'format' => '2D', 'price' => 3080, 'room' => 'Зал 1'],
                ],
            ],
            [
                'title' => 'Когда не загрузилась афиша',
                'imageUrl' => null,
                'tags' => ['комедия'],
                'isPremiere' => true,
                'sessions' => [
                    ['time' => '15:35', 'format' => '2D', 'price' => 1233, 'room' => 'Зал 3'],
                    ['time' => '17:40', 'format' => '2D', 'price' => 3080, 'room' => 'Зал 6 VIP'],
                ],
            ],
            [
                'title' => 'Руслан и Людмила. Больше, чем сказка',
                'imageUrl' => '/images/movies/6.jpg',
                'tags' => ['анимационное приключение'],
                'isPremiere' => true,
                'sessions' => [],
            ],
        ],
    ]);
})->name('home');
