<?php

use yii\db\Migration;

/** 
 * Class m190523_054809_subjects_key
 */
class m190523_054809_subjects_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('subjects_key', [
            'question_id' => $this->integer(11)->notNull(),
            'right_answer_id' => $this->integer(11)->notNull()
        ]);

        $this->addForeignKey('subjects-key_questions', 'subjects_key', 'question_id', 'questions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('subjects-key_questions', 'subjects_key');
        $this->dropTable('subjects_key');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_054809_subjects_key cannot be reverted.\n";

        return false;
    }
    */
}
