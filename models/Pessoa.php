<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pessoa".
 *
 * @property int $id
 * @property string $nome
 * @property string $sexo
 * @property int $cpf
 * @property string $rg
 * @property string $datanascimento
 * @property string $email
 * @property string $telefone
 * @property int $endereco_id
 * @property string $obs
 * @property string $login
 * @property string $senha
 * @property string $nivelacesso
 *
 * @property Endereco $endereco
 * @property Vendas[] $vendas
 */
class Pessoa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pessoa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'sexo', 'cpf', 'rg', 'datanascimento', 'email', 'telefone', 'endereco_id', 'obs', 'login', 'senha', 'nivelacesso'], 'required'],
            [['cpf', 'endereco_id'], 'integer'],
            [['datanascimento'], 'safe'],
            [['nome', 'sexo', 'rg', 'email', 'telefone', 'obs', 'login', 'senha', 'nivelacesso'], 'string', 'max' => 255],
            [['endereco_id'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['endereco_id' => 'id']],
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
            'sexo' => 'Sexo',
            'cpf' => 'Cpf',
            'rg' => 'Rg',
            'datanascimento' => 'Datanascimento',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'endereco_id' => 'Endereco ID',
            'obs' => 'Obs',
            'login' => 'Login',
            'senha' => 'Senha',
            'nivelacesso' => 'Nivelacesso',
        ];
    }

    /**
     * Gets query for [[Endereco]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEndereco()
    {
        return $this->hasOne(Endereco::className(), ['id' => 'endereco_id']);
    }

    /**
     * Gets query for [[Vendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendas()
    {
        return $this->hasMany(Vendas::className(), ['pessoa_id' => 'id']);
    }
}
