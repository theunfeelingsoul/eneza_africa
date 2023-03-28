<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact_info".
 *
 * @property int $id
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $twitter
 * @property string $facebook
 */
class Contactinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'phone', 'email', 'twitter', 'facebook'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'phone' => 'Phone number',
            'email' => 'Email',
            'twitter' => 'Twitter Link',
            'facebook' => 'Facebook Link',
        ];
    }
}
