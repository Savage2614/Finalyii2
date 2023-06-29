<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "percent".
 *
 * @property int $id
 * @property int|null $html
 * @property int|null $css
 * @property int|null $js
 * @property int|null $php
 * @property int|null $wordpress/cms
 * @property int|null $photoshop
 * @property int $status
 */
class Percent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'percent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['html', 'css', 'js', 'php', 'wordpresscms', 'photoshop', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'html' => 'Html',
            'css' => 'Css',
            'js' => 'Js',
            'php' => 'Php',
            'wordpresscms' => 'Wordpress/cms',
            'photoshop' => 'Photoshop',
            'status' => 'Status',
        ];
    }
}
