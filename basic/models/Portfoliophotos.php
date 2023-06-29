<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfoliophotos".
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $title
 * @property int|null $description
 * @property int $status
 */
class Portfoliophotos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfoliophotos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'status','categoryid'], 'integer'],
            [['status'], 'required'],
            [['image', 'title','description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
            'categoryid' =>'Categoryid'
        ];
    }
}
