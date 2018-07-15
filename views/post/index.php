<?php

use yii\helpers\Html;
use \yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список записей';

$this->registerMetaTag(
    [
        'name'    => 'description',
        'content' => 'Список записей',
    ]
);

$this->registerMetaTag(
    [
        'name'    => 'keywords',
        'content' => 'Список записей',
    ]
);

?>
<div class="post-index">

    <ul class="post-filter">
        <?= Html::a('<li><i class="fa fa-columns"></i>Все</li>', '/post/index') ?>
        <?= Html::a('<li><i class="fa fa-eye"></i>Популярные</li>', '/post/index/1') ?>
        <?= Html::a('<li><i class="fa fa-comments"></i>Обсуждаемые</li>', '/post/index/2') ?>
    </ul>

    <?php Pjax::begin(); ?>
    <?= ListView::widget(
        [
            'dataProvider' => $dataProvider,
            'emptyText'    => 'Записи не найдены.',
            'itemView'     => '_view',
            'layout' => "{items}{pager}",
        ]
    ); ?>
    <?php Pjax::end(); ?>
</div>
