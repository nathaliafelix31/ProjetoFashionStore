<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendas".
 *
 * @property int $id
 * @property string $datavenda
 * @property float|null $desconto
 * @property float|null $precototal
 * @property int|null $qtd
 * @property int|null $produto_id
 * @property int|null $pessoa_id
 *
 * @property Pessoa $pessoa
 * @property Produto $produto
 */
class Vendas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['datavenda'], 'required', 'message' =>'Campo Inválido'],
            [['datavenda'], 'safe'],
            [['desconto', 'precototal'], 'number'],
            [['qtd', 'produto_id', 'pessoa_id'], 'integer'],
            [['pessoa_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pessoa::className(), 'targetAttribute' => ['pessoa_id' => 'id']],
            [['produto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['produto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datavenda' => 'Data da Venda',
            'desconto' => 'Desconto',
            'precototal' => 'Preço Total',
            'qtd' => 'Quantidade',
            'produto_id' => 'Produto ID',
            'pessoa_id' => 'Pessoa ID',
        ];
    }

    /**
     * Gets query for [[Pessoa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoa()
    {
        return $this->hasOne(Pessoa::className(), ['id' => 'pessoa_id']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::className(), ['id' => 'produto_id']);
    }
}
