<?php

use yii\db\Migration;

/**
 * Class m210922_164631_Endereco
 */
class m210922_164631_Endereco extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Endereco', [
            'id'=> $this->primaryKey(),
            'logradouro' => $this->string()->notNull(),
            'numero' => $this->string()->notNull(),
            'complemento' => $this->string(),
            'bairro' => $this->string()->notNull(),
            'cidade' => $this->string()->notNull(),
            'estado' => $this->string()->notNull()
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Endereco');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_164631_Endereco cannot be reverted.\n";

        return false;
    }
    */
}
