<?php

namespace app\commands;

use app\models\Department;
use app\models\State;
use yii\console\Controller;
use app\components\Constants as C;
use app\models\City;
use app\models\ExpenseCategory;
use app\models\User;
use Yii;

class InitController extends Controller
{

    
    public function actionInitialize()
    {
        //insert state data
        $this->addAdminUser();
    }

    public function addAdminUser()
    {
        $username = "sadmin";
        $password =  strtolower(str_replace([" ", "."], "", SITE_NAME)) . "@" . date("Ymd");
        $model = User::findOne(['username' => $username]);
        if (!$model instanceof User) {
            $model = new User(['scenario' => User::SCENARIO_CREATE]);
            $model->name = "sadmin";
            $model->username = "sadmin";
        } else {
            $model->scenario = User::SCENARIO_UPDATE;
        }
        $model->password = md5($password);
        $model->password_hash = \Yii::$app->security->generatePasswordHash($password);
        $model->auth_key = \Yii::$app->security->generateRandomString();
        $model->status = C::STATUS_ACTIVE;
        if ($model->validate() && $model->save()) {
            echo "username => {$username} and password is  {$password}";
            return true;
        }
        return false;
    }
}
