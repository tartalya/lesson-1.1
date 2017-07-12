<?php

$name = 'Александр';

$age = date_diff(new DateTime("18.04.1980"), new DateTime())->y;

$email = 'saha@kalopsia.ru';
$city = 'Дубна';
$aboutme = 'Unix сисадмин, php программист';

?>

<html lang="ru">
<head>
    <title><?= $name . ' ' . $aboutme ?></title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
        }

        dl {
            display: table-row;
        }

        dt, dd {
            display: table-cell;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<h1>Страница пользователя <?= $name ?></h1>
<dl>
    <dt>Имя</dt>
    <dd><?= $name ?></dd>
</dl>
<dl>
    <dt>Возраст</dt>
    <dd><?= $age ?></dd>
</dl>
<dl>
    <dt>Адрес электронной почты</dt>
    <dd><a href="mailto:<?= $email ?>"><?= $email ?></a></dd>
</dl>
<dl>
    <dt>Город</dt>
    <dd><?= $city ?></dd>
</dl>
<dl>
    <dt>О себе</dt>
    <dd><?= $aboutme ?></dd>
</dl>
</body>
</html>