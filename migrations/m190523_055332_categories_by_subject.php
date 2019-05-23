<?php

use yii\db\Migration;

/** 
 * Class m190523_055332_categories_by_subject
 */
class m190523_055332_categories_by_subject extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('categories_by_subject', [
            'profession_id' => $this->integer(11)->notNull(),
            'course_id' => $this->integer(11)->notNull(),
            'subject' => $this->string(45)->notNull()
        ]);

        $this->addForeignKey('categories-by-subject_courses', 'categories_by_subject', 'course_id', 'courses', 'id');
        $this->addForeignKey('categories-by-subject_professions', 'categories_by_subject', 'profession_id', 'professions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropForeignKey('categories-by-subject_professions', 'categories_by_subject');
       $this->dropForeignKey('categories-by-subject_courses', 'categories_by_subject');
       $this->dropTable('categories_by_subject');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_055332_categories_by_subject cannot be reverted.\n";

        return false;
    }
    */
}
