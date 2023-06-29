<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "percenttable".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $percent
 * @property int|null $status
 */
class Percenttable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'percenttable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['percent', 'status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'percent' => 'Percent',
            'status' => 'Status',
        ];
    }
}
