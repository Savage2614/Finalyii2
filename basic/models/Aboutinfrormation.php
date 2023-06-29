<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aboutinfrormation".
 *
 * @property int $id
 * @property int|null $clients
 * @property int|null $projects
 * @property int|null $hoursofsupport
 * @property int|null $hardworkers
 * @property int $status
 */
class Aboutinfrormation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aboutinfrormation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clients', 'projects', 'hoursofsupport', 'hardworkers', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clients' => 'Clients',
            'projects' => 'Projects',
            'hoursofsupport' => 'Hoursofsupport',
            'hardworkers' => 'Hardworkers',
            'status' => 'Status',
        ];
    }
}
