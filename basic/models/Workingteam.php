<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workingteam".
 *
 * @property int $id
 * @property string|null $worker_image
 * @property string|null $worker_name
 * @property string|null $worker_post
 * @property string|null $workernameru
 * @property string|null $workerpostru
 * @property string|null $twitter_url
 * @property string|null $facebook_url
 * @property string|null $instagram_url
 * @property string|null $linkedin_url
 * @property int $status
 */
class Workingteam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workingteam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['workername', 'workerpost','workernameru', 'workerpostru'], 'string'],
            [['status'], 'integer'],
            [['workerimage', 'twitterurl', 'facebookurl', 'instagramurl', 'linkedinurl'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'workerimage' => 'WorkerImage',
            'workername' => 'WorkerName',
            'workerpost' => 'WorkerPost',
            'workernameru' => 'WorkerNameru',
            'workerpostru' => 'WorkerPostru',
            'twitterurl' => 'TwitterUrl',
            'facebookurl' => 'FacebookUrl',
            'instagramurl' => 'InstagramUrl',
            'linkedinurl' => 'LinkedinUrl',
            'status' => 'Status',
        ];
    }
}
