<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Casting;

/**
 * CastingSearch represents the model behind the search form about `app\Models\Casting`.
 */
class CastingSearch extends Casting
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'telf_mobil'], 'integer'],
            [['nom', 'cognoms', 'data_naix', 'nif', 'adresa', 'cp', 'poblacio', 'comarca', 'email', 'formacio_teatral', 'formacio_dansa', 'formacio_arts', 'formacio_musical', 'observacions'], 'safe'],
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
        $query = Casting::find();

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
            'data_naix' => $this->data_naix,
            'telf_mobil' => $this->telf_mobil,
        ]);

        $query->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'cognoms', $this->cognoms])
            ->andFilterWhere(['like', 'nif', $this->nif])
            ->andFilterWhere(['like', 'adresa', $this->adresa])
            ->andFilterWhere(['like', 'cp', $this->cp])
            ->andFilterWhere(['like', 'poblacio', $this->poblacio])
            ->andFilterWhere(['like', 'comarca', $this->comarca])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'formacio_teatral', $this->formacio_teatral])
            ->andFilterWhere(['like', 'formacio_dansa', $this->formacio_dansa])
            ->andFilterWhere(['like', 'formacio_arts', $this->formacio_arts])
            ->andFilterWhere(['like', 'formacio_musical', $this->formacio_musical])
            ->andFilterWhere(['like', 'observacions', $this->observacions]);

        return $dataProvider;
    }
}
