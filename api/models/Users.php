<?php

namespace api\models;

use Yii;
use \yii\db\ActiveRecord;
use \yii\helpers\Url;
use yii\web\Linkable;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property int $enabled
 *
 * @property Users[] $Users
 */
class Users extends ActiveRecord implements Linkable
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [];
    }

    public function fields()
    {
        return [
            'id',
            'username',
            'email',
            'created_at' => function () {
                return Yii::$app->formatter->asDatetime($this->created_at, 'dd.MM.yyyy HH:mm:ss');
            },
            'updated_at' => function () {
                return Yii::$app->formatter->asDatetime($this->updated_at, 'dd.MM.yyyy HH:mm:ss');
            },
            'status',
        ];
    }

    public function getLinks()
    {
        return [
            'self' => Url::to(['users/view', 'id' => $this->id], true),
        ];
    }
}
