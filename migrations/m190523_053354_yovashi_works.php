<?php

use yii\db\Migration;

/** 
 * Class m190523_053354_yovashi_works
 */
class m190523_053354_yovashi_works extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('yovashi_works', [
            'profession_id' => $this->integer(11)->notNull(),
            'field' => $this->string(45)
        ]);

        $this->addForeignKey('yovashi-works_professions', 'yovashi_works', 'profession_id', 'professions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('yovashi-works_professions', 'yovashi_works');
        $this->dropTable('yovashi_works');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_053354_yovashi_works cannot be reverted.\n";

        return false;
    }
    */
}
