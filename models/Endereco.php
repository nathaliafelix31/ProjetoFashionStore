<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $id
 * @property string $logradouro
 * @property string $numero
 * @property string|null $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 *
 * @property Pessoa[] $pessoas
 */
class Endereco extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['logradouro', 'numero', 'bairro', 'cidade', 'estado'], 'required', 'message' =>'Campo Inválido'],
            [['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Pessoas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPessoas()
    {
        return $this->hasMany(Pessoa::className(), ['endereco_id' => 'id']);
    }

     /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
 
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new  yii\base\UnknownPropertyException();
    }
 
        /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        //throw new  yii\base\UnknownPropertyException();
    }
 
    public function validateAuthKey($authKey)
    {
        //throw new  yii\base\UnknownPropertyException();
    }
 
    public static function findByUsername($username){
        return self::findOne(['login'=>$username]);
    }
 
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->senha);
    }

    public function beforeSave($insert)
    {
       if (parent::beforeSave($insert)) {
           $this->senha = Yii::$app->security->generatePasswordHash($this->senha);
           return true;
       } else {
           return false;
       }
    }
}
