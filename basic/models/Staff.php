<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $post
 * @property string|null $quote
 * @property string|null $img
 * @property int|null $status
 * @property int|null $nameru
 * @property int|null $postru
 * @property int|null $quoteru
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quote','quoteru'], 'string'],
            [['status'], 'integer'],
            [['name','nameru','postru','post', 'img'], 'string', 'max' => 255],
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
            'post' => 'Post',
            'quote' => 'Quote',
            'img' => 'Img',
            'status' => 'Status',
            'nameru' => 'Nameru',
            'postru' => 'Postru',
            'quoteru' => 'Quoteru',
        ];
    }
}
