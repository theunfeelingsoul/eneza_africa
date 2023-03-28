<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $main_image
 * @property string $timestamp
 * @property int $author
 * @property string $intro
 * @property int $category
 */
class Blog extends \yii\db\ActiveRecord
{
    // will be used to store the image data
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'intro'], 'string'],
            [['author', 'category'], 'integer'],
            [['title', 'main_image', 'timestamp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'main_image' => 'Main Image',
            'timestamp' => 'Timestamp',
            'author' => 'Author',
            'intro' => 'Intro',
            'category' => 'Category',
        ];
    }

    /**
    * Saves the uploaded image to the a folder
    * If upload is succesful it returns true
    */
    public function upload($img_name)
    {   

        if ($this->imageFile->saveAs('img/uploads/blog/' . $img_name . '.' . $this->imageFile->extension)) {
            return true;
        }else{
            return false;
        }
       
    } // end upload()

    public function imageurl($img)
    {
        return \Yii::$app->request->BaseUrl.$img;
    }



} // end class
