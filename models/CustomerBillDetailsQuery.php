<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CustomerBillDetails]].
 *
 * @see CustomerBillDetails
 */
class CustomerBillDetailsQuery extends \app\models\BaseQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return CustomerBillDetails[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return CustomerBillDetails|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
