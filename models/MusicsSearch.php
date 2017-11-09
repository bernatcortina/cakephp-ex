<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Musics;

/**
 * MusicsSearch represents the model behind the search form about `app\models\Musics`.
 */
class MusicsSearch extends Musics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_instrument', 'preu_assistencia', 'preu_concert'], 'integer'],
            [['cognoms', 'nom', 'instrument', 'data_naix', 'lloc', 'adresa', 'cp', 'poblacio', 'comarca', 'telefon', 'fax', 'tel_mobil', 'mail', 'dni', 'num_ss', 'num_cc', 'aseguransa_instrument', 'titular', 'projecte_pedagogic'], 'safe'],
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
        $query = Musics::find();

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
            'id_instrument' => $this->id_instrument,
            'preu_assistencia' => $this->preu_assistencia,
            'preu_concert' => $this->preu_concert,
        ]);

        $query->andFilterWhere(['like', 'cognoms', $this->cognoms])
            ->andFilterWhere(['like', 'nom', $this->nom])
            ->andFilterWhere(['like', 'instrument', $this->instrument])
            ->andFilterWhere(['like', 'data_naix', $this->data_naix])
            ->andFilterWhere(['like', 'lloc', $this->lloc])
            ->andFilterWhere(['like', 'adresa', $this->adresa])
            ->andFilterWhere(['like', 'cp', $this->cp])
            ->andFilterWhere(['like', 'poblacio', $this->poblacio])
            ->andFilterWhere(['like', 'comarca', $this->comarca])
            ->andFilterWhere(['like', 'telefon', $this->telefon])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'tel_mobil', $this->tel_mobil])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'dni', $this->dni])
            ->andFilterWhere(['like', 'num_ss', $this->num_ss])
            ->andFilterWhere(['like', 'num_cc', $this->num_cc])
            ->andFilterWhere(['like', 'aseguransa_instrument', $this->aseguransa_instrument])
            ->andFilterWhere(['like', 'titular', $this->titular])
            ->andFilterWhere(['like', 'projecte_pedagogic', $this->projecte_pedagogic]);

        return $dataProvider;
    }
}
