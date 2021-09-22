<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contem".
 *
 * @property int $id
 * @property int $quantidade
 * @property float $precoVenda
 * @property int $prod_id
 *
 * @property Produto $prod
 */
class Contem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantidade', 'precoVenda', 'prod_id'], 'required'],
            [['quantidade', 'prod_id'], 'integer'],
            [['precoVenda'], 'number'],
            [['prod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::className(), 'targetAttribute' => ['prod_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'precoVenda' => 'Preco Venda',
            'prod_id' => 'Prod ID',
        ];
    }

    /**
     * Gets query for [[Prod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProd()
    {
        return $this->hasOne(Produto::className(), ['id' => 'prod_id']);
    }
}
