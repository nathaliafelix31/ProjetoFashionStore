<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendas;

/**
 * VendasSearch represents the model behind the search form of `app\models\Vendas`.
 */
class VendasSearch extends Vendas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'qtd', 'produto_id', 'pessoa_id'], 'integer'],
            [['datavenda'], 'safe'],
            [['desconto', 'precototal'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vendas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'datavenda' => $this->datavenda,
            'desconto' => $this->desconto,
            'precototal' => $this->precototal,
            'qtd' => $this->qtd,
            'produto_id' => $this->produto_id,
            'pessoa_id' => $this->pessoa_id,
        ]);

        return $dataProvider;
    }
}
