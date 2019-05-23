<?php

use yii\db\Migration;

/** 
 * Class m190523_053942_yovashi_key
 */
class m190523_053942_yovashi_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yovashi_key', [
            'question_id' => $this->integer(11)->notNull(),
            'answer_id' => $this->integer(11)->notNull(),
            'field' => $this->string(45)->notNull()
        ]);

        $this->addForeignKey('yovashi-key_questions', 'youvashi_key', 'question_id', 'questions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('yovashi-key_questions', 'youvashi_key');
        $this->dropTable('youvashi_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_053942_yovashi_key cannot be reverted.\n";

        return false;
    }
    */
}
