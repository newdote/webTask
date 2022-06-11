<?php

namespace frontend\models;

use yii\db\ActiveRecord;

/**
 * Categories model
 */
class Categories extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%categories}}';
    }
}
