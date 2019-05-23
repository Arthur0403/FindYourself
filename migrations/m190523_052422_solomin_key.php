<?php

use yii\db\Migration;  

/**
 * Class m190523_052422_solomin_key
 */
class m190523_052422_solomin_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('solomin_key', [
            'question_id'=> $this->integer(11)->notNull(),
            'labor_object' => $this->string(45)->notNull(),
            'work_nature' => $this->string(45)->notNull()
        ]);

        $this->addForeignKey('solomin-key_questions', 'solomin_key', 'question_id', 'questions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('solomin-key_questions', 'solomin_key');
        $this->dropTable('solomin_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_052422_solomin_key cannot be reverted.\n";

        return false;
    }
    */
}
