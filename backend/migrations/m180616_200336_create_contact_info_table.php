<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact_info`.
 */
class m180616_200336_create_contact_info_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact_info', [
            'id' => $this->primaryKey(),
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
        $this->dropTable('contact_info');
    }
}
