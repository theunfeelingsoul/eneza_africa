<?php

namespace app\models;

use Yii;

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string $img_path
 * @property string $caption
 * @property int $category
 */
class Gallery extends \yii\db\ActiveRecord
{
     // will be used to store the image data
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'integer'],
            [['img_path', 'caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_path' => 'Img Path',
            'caption' => 'Caption',
            'category' => 'Category',
        ];
    }

    /**
    * Saves the uploaded image to the a folder
    * If upload is succesful it returns true
    */
    public function upload($img_name)
    {   

        if ($this->imageFile->saveAs('img/uploads/gallery/' . $img_name . '.' . $this->imageFile->extension)) {
            return true;
        }else{
            return false;
        }
       
    } // end upload()

    public function imageurl($img)
    {
    return \Yii::$app->request->BaseUrl.$img;
    }



}  // end class
