<?php
/**
 * Created by PhpStorm.
 * User: Eduar
 * Date: 16.10.2018
 * Time: 21:04
 */

namespace backend\controllers;


use yii\web\Controller;

class MyController extends Controller
{

    public function actionIndex(){

        return $this->render("index");
    }



}