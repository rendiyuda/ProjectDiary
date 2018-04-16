<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diari".
 *
 * @property int $DiaryNum
 * @property string $Diary
 */
class Diari extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diari';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Diary'], 'required'],
            [['Diary'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DiaryNum' => 'Diary Num',
            'Diary' => 'Diary',
        ];
    }
}
