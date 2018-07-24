<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Donate';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-donate">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Я с удовольствием и благодарностью приму маленькие пожертвования (donate).</p>
    <p>Данные моих счетов здесь всегда в актуальном виде, можно не уточнять.</p>

    <h3>Проще всего поддержать проект с помощью:</h3>

    <?php

        $payments = [
            ['provider' => 'Яндекс-Деньги', 'account' => '<a href="https://money.yandex.ru/to/41001609245268">41001609245268</a>'],
            ['provider' => 'ETH', 'account' => '0x86015cE93366E95089583E99e00dD07496EF6CE4'],
            ['provider' => 'BTC', 'account' => '3JkY6SH8z4g4ncGeNpdVuenDnaNTcj4SHq'],
            ['provider' => 'Byteball', 'account' => 'ZAL33AOP6JVIIXL5A75CDSBD64XOEI7X'],
            ['provider' => 'Golos', 'account' => 'phpland'],
            ['provider' => 'Steemit', 'account' => 'dignityinside'],
        ];

    ?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Платёжная система</th>
            <th>Номер кошелька</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($payments as $payment) : ?>
                <tr>
                    <td><?= $payment['provider']; ?></td>
                    <td><?= $payment['account']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p class="hint-block">Не забудьте указать в комментарии слово phpland и ваше имя или псевдоним, которое будет отображаться ниже (например так: phpland, Александр)</p>

    <h3>Вы также можете поддержать проект, следуя за мною в социальных сетях:</h3>

    <p><i class="fa fa-vk"></i> <a href="https://vk.com/phpland" target="_blank" rel="nofollow noopener">https://vk.com/phpland</a></p>

    <p><i class="fa fa-youtube"></i> <a href="https://www.youtube.com/user/dignityinside" target="_blank" rel="nofollow noopener">https://www.youtube.com/user/dignityinside</a></p>

    <p><i class="fa fa-telegram"></i> <a href="https://t.me/phpland" target="_blank" rel="nofollow noopener">https://t.me/phpland</a></p>

    <p><i class="fa fa-twitter"></i> <a href="https://twitter.com/phplandorg" target="_blank" rel="nofollow noopener">https://twitter.com/phplandorg</a></p>

    <p class="hint-block">Буду благораден также за лайки, репосты и т.д.</p>

    <h3>Доска почета (список донэйшнов от 100 ₽). Спасибо за поддержку!</h3>

    <?php

        // list of donations
        $donations = [
            ['name' => 'Аноним', 'value' => '400'],
            ['name' => 'Аноним', 'value' => '120'],
            ['name' => 'Аноним', 'value' => '400'],
            ['name' => 'Аноним', 'value' => '800'],
            ['name' => 'Валерий', 'value' => '1000'],
            ['name' => 'Валерий', 'value' => '1000'],
            ['name' => 'Аноним', 'value' => '500'],
            ['name' => 'Аноним', 'value' => '300'],
            ['name' => 'Валерий', 'value' => '1500'],
        ];

        // sort by value
        rsort($donations)

    ?>

    <table class="table table-hover">
        <thead>
        <tr >
            <th>№</th>
            <th>Сумма</th>
            <th>Имя/Псевдоним</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($donations as $donation) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $donation['value']; ?> ₽</td>
                    <td><i class="fa fa-user"></i> <?= $donation['name']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p class="hint-block">p.s. Все донэйшены конваеритуются в рубли в момент публикации.</p>

</div>
