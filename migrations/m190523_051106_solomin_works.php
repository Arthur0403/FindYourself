<?php

use yii\db\Migration;

/**
 * Class m190523_051106_solomin_works
 */ 
class m190523_051106_solomin_works extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('solomin_works', [
            'profession_id'=> $this->integer(11)->notNull(),
            'labor_object'=> $this->string(45)->notNull(),
            'work_nature'=> $this->string(45)->notNull(),
        ]);

        $this->addForeignKey('professions_profession-id', 'solomin_works', 'profession_id', 'professions', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('professions_profession-id', 'solomin_works');
        $this->dropTable('solomin_works');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_051106_solomin_works cannot be reverted.\n";

        return false;
    }
    */
}
