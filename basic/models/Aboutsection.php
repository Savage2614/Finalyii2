<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutsection".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $icon
 * @property int|null $status
 * @property string|null $titleru
 * @property string|null $descriptionru
 */
class Aboutsection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutsection';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'descriptionru'], 'string'],
            [['status'], 'integer'],
            [['title', 'icon', 'titleru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'icon' => Yii::t('app', 'Icon'),
            'status' => Yii::t('app', 'Status'),
            'titleru' => Yii::t('app', 'Titleru'),
            'descriptionru' => Yii::t('app', 'Descriptionru'),
        ];
    }
}
