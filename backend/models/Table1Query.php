<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Table1]].
 *
 * @see Table1
 */
class Table1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Table1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Table1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
