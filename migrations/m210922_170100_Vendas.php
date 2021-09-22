<?php

use yii\db\Migration;

/**
 * Class m210922_170100_Vendas
 */
class m210922_170100_Vendas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Vendas', [
            'id'=> $this->primaryKey(),
            'datavenda' => $this->date()->notNull(),
            'desconto' => $this->float(),
            'precototal' => $this->float(),
            'qtd'=>$this->integer(),
            'produto_id'=>$this->integer(),
            'pessoa_id' =>$this->integer()
        ]);

        $this->addForeignKey(
            'pessoa_id', 
            'Vendas', 
            'pessoa_id',
            'Pessoa', 
            'id', 
            'RESTRICT'
        );

        $this->addForeignKey(
            'produto_id', 
            'Vendas', 
            'produto_id',
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
        $this->dropForeignKey(
            'pessoa_id',
            'produto_id',
            'Vendas'
        );
        $this->dropTable('Vendas');
    
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_170100_Vendas cannot be reverted.\n";

        return false;
    }
    */
}
