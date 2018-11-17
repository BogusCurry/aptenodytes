<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Donate';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-donate">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Я с удовольствием и благодарностью приму маленькие пожертвования (donate).<br>Данные моих счетов здесь всегда в актуальном виде, можно не уточнять.</p>

    <h3>Проще всего поддержать проект с помощью:</h3>

    <?php

        $payments = [
            ['provider' => 'Яндекс-Деньги', 'account' => '<a href="https://money.yandex.ru/to/41001609245268">41001609245268</a>'],
            ['provider' => 'Webmoney', 'account' => 'R321159265992'],
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

    <p class="hint-block">Не забудьте указать в комментарии слово phpland и ваше имя или псевдоним, которое будет отображаться ниже (например так: phpland, Александр)</p>

    <h3>Доска почета (список донэйшнов от 100 ₽). Спасибо за поддержку!</h3>

    <?php

        // list of donations
        $donations = [
            ['name' => 'Валерий', 'value' => '1500'],
            ['name' => 'Валерий', 'value' => '1000'],
            ['name' => 'Валерий', 'value' => '1000'],
            ['name' => 'Аноним', 'value' => '800'],
            ['name' => 'Аноним', 'value' => '500'],
            ['name' => 'Аноним', 'value' => '400'],
            ['name' => 'Аноним', 'value' => '400'],
            ['name' => 'Аноним', 'value' => '300'],
            ['name' => 'Аноним', 'value' => '120'],
            ['name' => 'Валерий', 'value' => '150'],
        ];

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

</div>
