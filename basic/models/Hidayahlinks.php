<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hidayahlinks".
 *
 * @property int $id
 * @property string|null $icon
 * @property string|null $link
 * @property int|null $status
 */
class Hidayahlinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hidayahlinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['icon', 'link','socname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'icon' => Yii::t('app', 'Icon'),
            'link' => Yii::t('app', 'Link'),
            'status' => Yii::t('app', 'Status'),
            'socname' => Yii::t('app', 'Socname'),
        ];
    }
}
