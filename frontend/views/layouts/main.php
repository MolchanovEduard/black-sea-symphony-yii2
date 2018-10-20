<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Language" content="ru"/>
        <meta name="robots" content="all"/>
        <meta name="author" content="Eduard Molchanov"/>

        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <ul id="navi">
        <!--
        <li><a href="index.php?r=sea/posters" >Афиша</a></li>
        -->
        <li><a href="/"  >Главная</a></li>
        <li><a href="/sea/posters" >Афиша</a></li>
        <li><a href="/sea/multimedia" >Мультимедиа</a></li>
        <li><a href="/sea/orchestra" > О нас </a></li>
        <li><a href="/sea/friends" >Друзья</a></li>
        <li><a href="/sea/cooperation">Сотрудничество</a></li>
        <li><a href="/sea/contact" >Контакты</a></li>
    </ul>
    <h1>Симфонический оркестр Крымской филармонии</h1>

    <?= $content ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>