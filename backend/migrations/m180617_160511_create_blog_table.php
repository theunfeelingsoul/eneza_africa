<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blog`.
 */
class m180617_160511_create_blog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blog', [
            'id' => $this->primaryKey(),
            'title'     => $this->string()->Null(),
            'content'   => $this->text()->Null(),
            'main_image'=> $this->string()->Null(),
            'timestamp' => $this->string()->Null(),
            'author'    => $this->integer()->Null(),
            'intro'     => $this->text()->Null(),
            'category'  => $this->integer()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blog');
    }
}
