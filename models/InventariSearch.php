<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventari;

/**
 * InventariSearch represents the model behind the search form about `app\models\Inventari`.
 */
class InventariSearch extends Inventari
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'valor', 'responsable_sortida', 'responsable_entrada'], 'integer'],
            [['ubicacio', 'nom', 'descripcio', 'data_sortida', 'lloc_sortida', 'data_entrada', 'observacions'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Inventari::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'valor' => $this->valor,
            'data_sortida' => $this->data_sortida,
            'responsable_sortida' => $this->responsable_sortida,
            'data_entrada' => $this->data_entrada,
            'responsable_entrada' => $this->responsable_entrada,
        ]);

        $query->andFilterWhere(['like', 'ubicacio', $this->ubicacio])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'descripcio', $this->descripcio])
            ->andFilterWhere(['like', 'lloc_sortida', $this->lloc_sortida])
            ->andFilterWhere(['like', 'observacions', $this->observacions]);

        return $dataProvider;
    }
}
