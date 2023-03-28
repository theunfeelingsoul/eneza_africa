<?php

use yii\db\Migration;

/**
 * Handles the creation of table `gallery_categories`.
 */
class m180524_083436_create_gallery_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('gallery_categories', [
            'id'        => $this->primaryKey(),
            'category'  => $this->string()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('gallery_categories');
    }
}
