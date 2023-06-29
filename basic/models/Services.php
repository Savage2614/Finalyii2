<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string|null $icon
 * @property string|null $title
 * @property string|null $titleru
 * @property string|null $description
 * @property string|null $descriptionru
 * @property int $status
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description','descriptionru'], 'string'],
            [['status'], 'integer'],
            [['icon', 'title','titleru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => 'Icon',
            'title' => 'Title',
            'description' => 'Description',
            'descriptionru' => 'Descriptionru',
            'titleru' => 'Titleru',
            'status' => 'Status',
        ];
    }
}
