<?php

use yii\db\Migration;

/**
 * Class m210922_170317_Contem
 */
class m210922_170317_Contem extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    
     $this->createTable('Contem', [
        'id'=> $this->primaryKey(),
        'quantidade' => $this->integer()->notNull(),
        'precoVenda' => $this->float()->notNull(),
        'prod_id' =>$this->integer()->notNull()
 
   
    ]);

    $this->addForeignKey(
        'prod_id', 
        'Contem', 
        'prod_id', 
        'Produto', 
        'id', 
        'RESTRICT'
    );
}

/**
* {@inheritdoc}
*/
public function safeDown()
{
    $this->dropTable('Contem');
}


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_170317_Contem cannot be reverted.\n";

        return false;
    }
    */
}
