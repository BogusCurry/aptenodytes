<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О проекте';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Привет друзья!</p>
    <p>Меня зовут Александр Шиллинг, я основатель проекта "phpland".</p>
    <p>Моё первое знакомство с PHP было в 2005 году, когда я купил свою первую книгу по этому замечательному языку программирования.</p>
    <p>Примерно с того времени я начал использовать PHP практически ежедневно и за это время собрал довольно большую информационную базу знаний про PHP.</p>
    <p>На этом сайте я хотел бы делиться своим уникальным опытом и знанием с теме, кому нравится PHP, JavaScript и конечно же Linux :)</p>
    <p>Если вам нравится моя идея, подписывайтесь в социальных сетях и пишите комментарии к статьям чтобы вместе сделать сайт популярнее :)</p>
    <p>С уважением, Александр Шиллинг.</p>
    <h3>Donate</h3>
    <p>Я с удовольствием и благодарностью приму маленькие пожертвования. <?= \yii\helpers\Html::a('Подробнее »', '/donate')?></p>
    <h3>Мы в социальных сетях:</h3>
    <p><i class="fa fa-youtube"></i> <a href="https://www.youtube.com/user/dignityinside" target="_blank" rel="nofollow">https://www.youtube.com/user/dignityinside</a></p>
    <p><i class="fa fa-vk"></i> <a href="https://vk.com/phpland" target="_blank" rel="nofollow">https://vk.com/phpland</a></p>
    <p><i class="fa fa-telegram"></i> <a href="https://t.me/phpland" target="_blank" rel="nofollow">https://t.me/phpland</a></p>
</div>
