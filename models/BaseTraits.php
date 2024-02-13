<?php

namespace app\models;

use app\components\Constants as C;
use app\models\UploadDocument;

trait BaseTraits
{
    
    public function ValidateMulti($attribute, $params)
    {
        $input = $this->$attribute;
        $isMulti = isset($params['isMulti']) ? $params['isMulti'] : false;

        if (!empty($input)) {
            if ($isMulti) {
                // if (!\yii\helpers\ArrayHelper::isAssociative($input)) {
                //     $this->addError($attribute, "$attribute need to be an array of objects");
                //     return;
                // }
            }
            if (!\yii\helpers\ArrayHelper::isTraversable($input)) {
                $this->addError($attribute, "$attribute need to be an array");
                return;
            }
            $ValidationModel = isset($params['ValidationModel']) ? $params['ValidationModel'] : false;
            if ($ValidationModel) {
                if (!($ValidationModel instanceof \yii\base\DynamicModel)) {
                    $this->addError($attribute, "Invalid ValidationModel passed has to be instance of \yii\base\DynamicModel");
                    return;
                }
            } else {
                $this->addError($attribute, "Invalid ValidationModel passed has to be instance of \yii\base\DynamicModel");
                return;
            }
            $format = $ValidationModel->attributes();

            if (!$isMulti) {
                $input = [$input];
            }
            foreach ($input as $i => $data) {
                $model = $ValidationModel;
                if (is_array($data)) {
                    //                    $missingKeys = array_diff($format,array_keys($data));
                    $missingKeys = [];
                    if (!empty($missingKeys)) {
                        $this->addError($attribute, "Following keys missing " . implode(',', $missingKeys) . ' at ' . $i . " index of $attribute input");
                        return false;
                    } else {
                        if ($model) {
                            $model->load($data, '');
                            if (!$model->validate()) {
                                foreach ($model->errors as $name => $error) {
                                    $this->addError("{$attribute}_{$i}_{$name}", $error[0]);
                                }
                            }
                        }
                    }
                } else {
                    $this->addError($attribute, "Has to be any array of objects with keys " . implode(',', $format));
                }
            }
        } else {
            if (isset($params['allowEmpty']) && $params['allowEmpty'] != false) {
                $this->addError($attribute, "Has to be any array of objects  cannot be Empty");
            }
        }
    }
}
