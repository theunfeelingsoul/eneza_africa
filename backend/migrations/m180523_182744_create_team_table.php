<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m180523_182744_create_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('team', [
            'id'    => $this->primaryKey(),
            'name'  => $this->string()->Null(),
            'title' => $this->string()->Null(),
            'desc'  => $this->text()->Null(),
            'intro' => $this->text()->Null(),
            'quote' => $this->text()->Null(),
            'social'=> $this->text()->Null(),
            'img'   => $this->string()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('team');
    }
}
