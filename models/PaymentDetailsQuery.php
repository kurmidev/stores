<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PaymentDetails]].
 *
 * @see PaymentDetails
 */
class PaymentDetailsQuery extends \app\models\BaseQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PaymentDetails[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PaymentDetails|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
