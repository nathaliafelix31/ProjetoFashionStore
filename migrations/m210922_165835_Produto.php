<?php

use yii\db\Migration;

/**
 * Class m210922_165835_Produto
 */
class m210922_165835_Produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Produto', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'descricao' => $this->string()->notNull(),
            'unidade' => $this->integer()->notNull(),
            'precoVenda' => $this->float()->notNull(),
            'precoCusto' => $this->float()->notNull(),
            'estoque' => $this->integer()->notNull()
            
        ]);

       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_165835_Produto cannot be reverted.\n";

        return false;
    }
    */
}
