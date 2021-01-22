<?php
$is_auth = rand(0, 1);

$user_name = 'Viktor Lugovskoy'; // укажите здесь ваше имя

$posts = [
    [
        'header' => 'Цитата',
        'type' => 'post-quote',
        'content' => 'Мы в жизни любим только раз, а после ищем лишь похожих',
        'username' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'header' => 'Игра престолов',
        'type' => 'post-text',
        'content' => 'Не могу дождаться начала финального сезона своего любимого сериала!',
        'username' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'header' => 'Наконец, обработал фотки!',
        'type' => 'post-photo',
        'content' => 'rock-medium.jpg',
        'username' => 'Виктор',
        'avatar' => 'userpic-mark.jpg'
    ],
    [
        'header' => 'Моя мечта',
        'type' => 'post-photo',
        'content' => 'coast-medium.jpg',
        'username' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'header' => 'Лучшие курсы',
        'type' => 'post-link',
        'content' => 'www.htmlacademy.ru',
        'username' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'header' => 'Полезный пост про Байкал',
        'type' => 'post-text',
        'content' => 'Озеро Байкал – огромное древнее озеро в горах Сибири к северу от монгольской границы. Байкал считается самым глубоким озером в мире. Он окружен сетью пешеходных маршрутов, называемых Большой байкальской тропой. Деревня Листвянка, расположенная на западном берегу озера, – популярная отправная точка для летних экскурсий. Зимой здесь можно кататься на коньках и собачьих упряжках.',
        'username' => 'Лариса Роговая',
        'avatar' => 'userpic-larisa-small.jpg'
    ]
];

function cut_Text(string $longText, int $maxLength = 300){
    if (mb_strlen($longText) <= $maxLength) {
        return $longText;
    }
    $longText = explode(' ', $longText);
    $currentLength = 0;
    $counter = 0;
    while ($currentLength <= $maxLength) {
        $word = $longText[$counter++];
        $currentLength += (mb_strlen($word) + 1);
    }
    return implode(' ', array_slice($longText, 0, $counter - 1)) . '...';
}

require_once('helpers.php');

$content = include_template('main.php',['posts' => $posts,'types' => $types,]);
$page = include_template('layout.php', ['content' => $content, 'page_name' => 'readme: популярное', 'is_auth' => $is_auth, 'user_name' => $user_name,]);
print($page);

?>
