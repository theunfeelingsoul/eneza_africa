<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "team".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $desc
 * @property string $intro
 * @property string $quote
 * @property string $social
 * @property string $img
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team';
    }

    // will be used to store the image data
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desc', 'intro', 'quote', 'social'], 'string'],
            [['name', 'title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'desc' => 'Description',
            'intro' => 'Short Intro',
            'quote' => 'Quote',
            'social' => 'Social Links',
            'img' => 'Profile Picture',
        ];
    }


    /**
    * Saves the uploaded image to the a folder
    * If upload is succesful it returns true
    */
    public function upload($img_name)
    {   

        if ($this->imageFile->saveAs('img/uploads/team/' . $img_name . '.' . $this->imageFile->extension)) {
            return true;
        }else{
            return false;
        }
       
    } // end upload()




} // end class
