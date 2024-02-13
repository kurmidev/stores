<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ProductAttr]].
 *
 * @see ProductAttr
 */
class ProductAttrQuery extends \app\models\BaseQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ProductAttr[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ProductAttr|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
