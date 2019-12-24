<?php

namespace app\controllers;
use Yii;
use yii\helpers\VarDumper;

class TestSoapController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $client = Yii::$app->siteApi;

        $tip = $client->getIndex();
        var_dump($tip->getIndex());
    }

}
