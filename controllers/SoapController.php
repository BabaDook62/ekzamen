<?php

namespace app\controllers;


use app\models\Soap;
use yii\helpers\VarDumper;
use yii\web\Controller;

class SoapController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return Soap::server();
    }

    public function actionClient()
    {
        $client = new \SoapClient(null, array(
            'location' =>
                "http://localhost/web/index.php?r=soap/index",
            'uri' => "http://localhost/web/index.php?r=soap/index",
            'trace' => 1));
        $return = $client -> __soapCall("hello",array("world"));
        var_dump ($return);
    }
}