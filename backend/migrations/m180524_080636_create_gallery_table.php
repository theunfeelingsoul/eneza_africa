<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery`.
 */
class m180524_080636_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery', [
            'id'        => $this->primaryKey(),
            'img_path'  => $this->string()->Null(),
            'caption'   => $this->string()->Null(),
            'category'  => $this->integer()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gallery');
    }
}
