<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[GrindingAssemblyLine]].
 *
 * @see GrindingAssemblyLine
 */
class GrindingAssemblyLineQuery extends \app\models\BaseQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GrindingAssemblyLine[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GrindingAssemblyLine|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
