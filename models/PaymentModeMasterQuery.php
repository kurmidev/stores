<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PaymentModeMaster]].
 *
 * @see PaymentModeMaster
 */
class PaymentModeMasterQuery extends \app\models\BaseQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PaymentModeMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PaymentModeMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
