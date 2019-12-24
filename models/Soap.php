<?php

namespace app\models;
use app\models\User;
class Soap extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public static function getAll()
    {
        $data = User::find()->all();
        return $data;
    }

    public function hello()
    {

        return self::getAll();
    }

    public static function server()
    {
        $server = new \SoapServer(null, array('uri' => "http://localhost/web/index.php?r=soap/index"));
        $server->setObject(new Soap());
        ob_start();
        $server->handle();
        $result = ob_get_contents();
        ob_end_clean();
        return $result;

    }

}