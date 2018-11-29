<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сообщество';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">

    <h1><i class="fa fa-users"></i> <?= Html::encode($this->title) ?></h1>

    <h3><i class="fa fa-support site-about--icon"></i> Помощь пользователям и информационная поддержка</h3>

    <p>
        Сообщество "phpland" славится своим дружелюбием и стремлением делиться приобретённым опытом с
        новыми веб-разработчиками (PHP, MySQL, JavaScript, HTML, CSS) и пользователями ОС Linux.
    </p>
    <p>
        В рамках "phpland" созданы два информационных ресурса поддержки пользователей,
        <a href="https://www.youtube.com/user/dignityinside" rel="nofollow">YouTube</a>
        канал и сайт <a href="/">phpland.org</a>.
        Кроме того существуют <a href="https://t.me/phpland_chat" target="_blank" rel="nofollow" title="Telegram чат">Telegram чат</a>,
        <a href="https://phpland.slack.com" target="_blank" rel="nofollow" title="Slack">Slack</a>,
        <a href="https://discord.gg/PPtFTZh" target="_blank" rel="nofollow" title="Discord">Discord</a>,
        <a href="https://vk.com/phpland" target="_blank" rel="nofollow" title="VK">VK</a>,
        <a href="https://mastodon.social/@phplandorg" rel="me nofollow" target="_blank" title="Mastodon">Mastodon</a>
        и другие ресурсы, созданные для поддержки и общения пользователей сообщества.
    </p>

    <p>Любой желающий может совершенно свободно <a href="/signup">зарегистрироваться на нашем сайте</a> и начать помогать
        другим пользователям, отвечая в комментариях и добавляя новые статьи на ресурс. Для этого совершенно не обязательно
        состоять в какой-либо команде.</p>

    <p>Основной принцип сообщества заключается в том, что каждый вносит посильный вклад, делится знаниями, которыми располагает.
    И в итоге сообща создаётся база знаний, в которой каждый может получить недостающую информацию.
    Сегодня вы помогли кому-то, ответив на вопрос или написав статью, а завтра кто-нибудь поможет вам.</p>

    <p>Поэтому прямо сейчас вы можете легко <a href="/signup">присоединиться к нашему сообществу</a> и оказать посильную помощь.</p>

    <p>Сообщество "phpland" было основано Александром Шиллинг (dignity) 01 декабря 2016 года.</p>

    <h3><i class="fa fa-code site-about--icon"></i> Исходынй код данного сайта</h3>

    <p>Сайт сообщества "phpland" написан с нуля и использует PHP фреймворк Yii2.</p>

    <p>Исходный код данного сайта доступен под лицензией MIT на
        <a href="https://github.com/phpland" target="_blank" rel="nofollow" title="Исходный код на Github">Github</a>.
        Вы свободно можете его изучать, использовать целиком или частично в своих проектах, при соблюдении условий лицензии.
        Если вы хотите поучаствовать в разработки проекта, загляните в раздел <a href="https://github.com/phpland/phpland/issues" rel="nofollow" target="_blank">Issues</a>
        и изучите README.md файл на Github.
    </p>

    <h3><i class="fas fa-donate site-about--icon"></i> Donate</h3>

    <p>Мы с удовольствием и благодарностью примем любые пожертвования. <?= \yii\helpers\Html::a('Подробнее »', '/donate')?></p>
</div>
