<?php

namespace api\models;

use \yii\db\ActiveRecord;
use \yii\helpers\Url;
use yii\web\Linkable;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property int $enabled
 *
 * @property News[] $news
 */
class News extends ActiveRecord implements Linkable
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    public function rules()
    {
        return [];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'category_id']);
    }

    public function getLinks()
    {
        return [
            'self' => Url::to(['news/view', 'id' => $this->id], true),
            'category' => Url::to(['categories/view', 'id' => $this->category_id], true),
        ];
    }
}
