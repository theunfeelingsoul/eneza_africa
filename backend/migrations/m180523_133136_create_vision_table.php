<?php

use yii\db\Migration;

/**
 * Handles the creation of table `vision`.
 */
class m180523_133136_create_vision_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vision', [
            'id'                => $this->primaryKey(),
            'vision_statement'  => $this->text()->Null(),
            'mission_statement' => $this->text()->Null(),
            'vision_title'      => $this->string()->Null(),
            'mission_title'     => $this->string()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('vision');
    }
}
