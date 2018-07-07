<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "table1".
 *
 * @property int $Column 1
 * @property int $Column 2
 * @property int $Column 3
 */
class Table1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Column 1', 'Column 2', 'Column 3'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Column 1' => 'Column 1',
            'Column 2' => 'Column 2',
            'Column 3' => 'Column 3',
        ];
    }

    /**
     * {@inheritdoc}
     * @return Table1Query the active query used by this AR class.
     */
    public static function find()
    {
        return new Table1Query(get_called_class());
    }
}
