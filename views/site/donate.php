<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Donate';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-donate">

    <h1><i class="fas fa-donate"></i> <?= Html::encode($this->title) ?></h1>

    <p>Мы с удовольствием и благодарностью примем любое пожертвования (donate). Все пожертвования идут на нужды сообщества (оплату сервера, домейна, разработку нового функционала, запись новых видео уроков и т.д).
        Все реквизиты всегда в актуальном виде, можно не уточнять.</p>

    <h3>Реквизиты</h3>

    <?php

        $payments = [
            ['provider' => 'Яндекс-Деньги', 'account' => '<a href="https://money.yandex.ru/to/41001609245268">41001609245268</a>'],
            ['provider' => 'Webmoney', 'account' => 'R321159265992'],
            ['provider' => 'PayPal', 'account' => '<a href="https://www.paypal.me/dignityinside">dignityinside</a>'],
            ['provider' => 'Bitshares', 'account' => '<a href="https://market.rudex.org/#/transfer">alexander-schilling</a>'],
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

    <p>Спасибо за поддержку!</p>

</div>
