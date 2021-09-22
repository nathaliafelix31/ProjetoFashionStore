<?php

use yii\db\Migration;

/**
 * Class m210922_164642_Pessoa
 */
class m210922_164642_Pessoa extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Pessoa', [
            'id'=> $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'sexo' => $this->string()->notNull(),
            'cpf' => $this->integer(11)->notNull(),
            'rg' => $this->string()->notNull(),
            'datanascimento' => $this->date()->notNull(),
            'email' => $this->string()->notNull(),
            'telefone' => $this->string()->notNull(),
            'endereco_id' =>$this->integer()->notNull(),
            'obs' => $this->string()->notNull(),
            'login' => $this->string()->notNull(),
            'senha' => $this->string()->notNull(),
            'nivelacesso' => $this->string()->notNull()
        ]);

        $this->addForeignKey(
            'endereco_id',
            'Pessoa', 
            'endereco_id', 
            'Endereco', 
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
            'endereco_id',
            'Pessoa'
        );
        $this->dropTable('Pessoa');


    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_164642_Pessoa cannot be reverted.\n";

        return false;
    }
    */
}
