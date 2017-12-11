<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property integer $id
 * @property string $tel
 * @property string $pwd
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tel', 'pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tel' => 'Tel',
            'pwd' => 'Pwd',
        ];
    }
}
