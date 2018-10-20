<?php
/**
 * Created by PhpStorm.
 * User: Eduar
 * Date: 15.10.2018
 * Time: 20:15
 */

namespace frontend\controllers;


use frontend\models\Foto;
use frontend\models\Posters;
use frontend\models\Users;
use frontend\models\Video;
use frontend\models\Seo;
use yii\web\Controller;

class SeaController extends Controller
{
    public function actionIndex()
    {
        $seo = Seo::findOne(5);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        return $this->render("index");
    }


    public function actionPosters()
    {
        $seo = Seo::findOne(6);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        $posters = Posters::find()->orderBy(["a4" => SORT_DESC])->all();
        return $this->render("posters", compact("posters"));
    }


    public function actionConcert($id)
    {
        $concert = Posters::findOne($id);
        $this->view->title=$concert->a1;
        return $this->render("concert", compact("concert"));
    }


    public function actionConcerts()
    {
        $this->view->title="Каталог всех концертов";
        $concerts = Posters::find()->orderBy(["a4" => SORT_DESC])->all();
        return $this->render("concerts", compact("concerts"));
    }


    public function actionMultimedia()
    {
        $seo = Seo::findOne(30);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        $video = Video::find()->orderBy(["a4" => SORT_DESC])->all();
        $foto = Foto::find()->orderBy(["a4" => SORT_DESC])->all();
        return $this->render("multimedia", compact("video", "foto"));
    }

    public function actionVideo($id)
    {
        $n = Video::findOne($id);
        $this->view->title=$n->a1;
        $video = Video::find()->orderBy(["a4" => SORT_DESC])->all();

        return $this->render("video", compact("video", "n"));
    }

    public function actionFoto($id)
    {
        $x = Foto::findOne($id);
        $this->view->title=$x->a1;
        $foto = Foto::find()->orderBy(["a4" => SORT_DESC])->all();
        return $this->render("foto", compact("x", "foto"));
    }


    public function actionOrchestra()
    {
        $seo = Seo::findOne(29);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        $x = Users::findOne(8);
        return $this->render("orchestra", compact("x"));
    }


    public function actionFriends()
    {
        $seo = Seo::findOne(3);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        return $this->render("friends");
    }


    public function actionCooperation()
    {
        $seo = Seo::findOne(9);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        return $this->render("cooperation");
    }


    public function actionContact()
    {
        $seo = Seo::findOne(4);
        $this->view->title = $seo->x1;
        $this->view->registerMetaTag(["name" => "keywords", "content" => $seo->x3]);
        $this->view->registerMetaTag(["name" => "description", "content" => $seo->x2]);
        return $this->render("contact");
    }


}