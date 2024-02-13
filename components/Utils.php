<?php

namespace app\components;

use yii\helpers\Html;
use app\components\Constants as C;

class Utils {

    public static function getStatusLabel($status) {
        switch ($status) {
            case C::STATUS_ACTIVE:
                return Html::tag('span', 'Active', ['class' => 'badge bg-success']);
            case C::STATUS_INACTIVE:
                return Html::tag('span', 'In Active', ['class' => 'badge bg-warning']);
            default:
                return "";
        }
    }
    
}