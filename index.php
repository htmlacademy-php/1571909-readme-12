<?php
require_once('helpers.php');

date_default_timezone_set('Europe/Moscow');

$is_auth = rand(0, 1);

$user_name = 'Viktor Lugovskoy'; // укажите здесь ваше имя

$posts = [
    [
        'header' => 'Цитата',
        'type' => 'post-quote',
        'content' => 'Мы в жизни любим только раз, а после ищем лишь похожих',
        'username' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg',
        'date' => generate_random_date(0)
    ],
    [
        'header' => 'Игра престолов',
        'type' => 'post-text',
        'content' => 'Не могу дождаться начала финального сезона своего любимого сериала!',
        'username' => 'Владик',
        'avatar' => 'userpic.jpg',
        'date' => generate_random_date(1)
    ],
    [
        'header' => 'Наконец, обработал фотки!',
        'type' => 'post-photo',
        'content' => 'rock-medium.jpg',
        'username' => 'Виктор',
        'avatar' => 'userpic-mark.jpg',
        'date' => generate_random_date(2)
    ],
    [
        'header' => 'Моя мечта',
        'type' => 'post-photo',
        'content' => 'coast-medium.jpg',
        'username' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg',
        'date' => generate_random_date(3)
    ],
    [
        'header' => 'Лучшие курсы',
        'type' => 'post-link',
        'content' => 'www.htmlacademy.ru',
        'username' => 'Владик',
        'avatar' => 'userpic.jpg',
        'date' => generate_random_date(4)
    ],
    [
        'header' => 'Полезный пост про Байкал',
        'type' => 'post-text',
        'content' => 'Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.',
        'username' => 'Лариса Роговая',
        'avatar' => 'userpic-larisa-small.jpg',
        'date' => generate_random_date(5)
    ]
];

$content = include_template('main.php',['posts' => $posts,'types' => $types,]);
$page = include_template('layout.php', ['content' => $content, 'page_name' => 'readme: популярное', 'is_auth' => $is_auth, 'user_name' => $user_name,]);
print($page);

?>
