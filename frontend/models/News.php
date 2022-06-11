<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * News model
 */
class  News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%news}}';
    }
}
