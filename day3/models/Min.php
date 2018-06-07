<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "min".
 *
 * @property integer $id
 * @property string $name
 * @property string $pwd
 * @property integer $age
 * @property string $email
 * @property string $img
 */
class Min extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'min';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['name', 'pwd', 'email', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'pwd' => 'Pwd',
            'age' => 'Age',
            'email' => 'Email',
            'img' => 'Img',
        ];
    }
}
