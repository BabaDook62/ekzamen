<?php

namespace app\controllers;
use app\models\user;
use yii\helpers\Json;

class ApiController extends \yii\web\Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'index' => 'mongosoft\soapserver\Action',
        ];
    }

    /**
     * @param string $name
     * @return string
     * @soap
     */
    public function getIndex()
    {
       $data = User::find()->asArray()->all();
       return Json::encode($data);
    }
}
