<?php

use yii\db\Migration;

/**
 * Class m211006_173254_unique
 */
class m211006_173254_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('pessoa','login', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('pessoa','login', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211006_173254_unique cannot be reverted.\n";

        return false;
    }
    */
}
