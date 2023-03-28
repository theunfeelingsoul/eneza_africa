<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact`.
 */
class m180616_195827_create_contact_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id'        => $this->primaryKey(),
            'address'   => $this->string()->Null(),
            'phone'     => $this->string()->Null(),
            'email'     => $this->string()->Null(),
            'twitter'   => $this->string()->Null(),
            'facebook'  => $this->string()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contact');
    }
}
