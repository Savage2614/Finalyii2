<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mainslider".
 *
 * @property int $id
 * @property string|null $bgimage
 * @property string|null $title
 * @property string|null $titleru
 * @property string|null $description
 * @property string|null $descriptionru
 * @property int|null $status
 */
class Mainslider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mainslider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description','descriptionru'], 'string'],
            [['status'], 'integer'],
            [['bgimage', 'title', 'titleru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bgimage' => 'Bgimage',
            'title' => 'Title',
            'titleru' => 'TitleRu',
            'description' => 'Description',
            'descriptionru' => 'Descriptionru',
            'status' => 'Status',
        ];
    }
}
