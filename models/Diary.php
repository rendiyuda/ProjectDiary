<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diari".
 *
 * @property int $no
 * @property int $post_id
 * @property string $diary
 */
class Diary extends \yii\db\ActiveRecord
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
            [['post_id', 'diary'], 'required'],
            [['post_id'], 'integer'],
            [['diary'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'post_id' => 'Post ID',
            'diary' => 'Diary',
        ];
    }
}
