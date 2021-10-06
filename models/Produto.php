<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $unidade
 * @property float $precoVenda
 * @property float $precoCusto
 * @property int $estoque
 *
 * @property Contem[] $contems
 * @property Vendas[] $vendas
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao', 'unidade', 'precoVenda', 'precoCusto', 'estoque'], 'required', 'message' =>'Campo Inválido'],
            [[ 'estoque'], 'integer'],
            [['precoVenda', 'precoCusto'], 'number'],
            [['nome', 'descricao', 'unidade',], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descricao' => 'Descrição',
            'unidade' => 'Tamanho',
            'precoVenda' => 'Preço de Venda',
            'precoCusto' => 'Preço de Custo',
            'estoque' => 'Estoque',
        ];
    }

    /**
     * Gets query for [[Contems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContems()
    {
        return $this->hasMany(Contem::className(), ['prod_id' => 'id']);
    }

    /**
     * Gets query for [[Vendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Vendas::className(), ['produto_id' => 'id']);
    }
}
