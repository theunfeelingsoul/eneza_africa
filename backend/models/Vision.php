<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vision".
 *
 * @property int $id
 * @property string $vision_statement
 * @property string $mission_statement
 * @property string $vision_title
 * @property string $mission_title
 */
class Vision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vision_statement', 'mission_statement'], 'string'],
            [['vision_title', 'mission_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vision_statement' => 'Vision Statement',
            'mission_statement' => 'Mission Statement',
            'vision_title' => 'Vision Title',
            'mission_title' => 'Mission Title',
        ];
    }
}
