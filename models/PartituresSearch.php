<?php

namespace app\Models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Partitures;

/**
 * PartituresSearch represents the model behind the search form about `app\Models\Partitures`.
 */
class PartituresSearch extends Partitures
{
    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return array_merge(parent::attributes(),['fkAutor.autor']);
    }
    public function rules()
    {
        return [
            [['id', 'num_catalogacio','fk_autor'], 'integer'],
            [['titol', 'fk_localitzacio', 'orq_simfonica', 'orq_classica', 'corda', 'orq_corda', 'vent', 'cambra_mixta', 'partitura', 'particella', 'copia_seguretat', 'fk_genere', 'plantilla','fkAutor.autor','num_catalogacio'], 'safe'],
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
        $query = Partitures::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'defaultOrder' => ['num_catalogacio'=>SORT_ASC],

        ]);

        $dataProvider->sort->attributes['fkAutor.autor'] = [
            'asc' => ['autors.autor' => SORT_ASC],
            'desc' => ['autors.autor' => SORT_DESC],
        ];

        $query->joinWith(['fkAutor']);

        $this->load($params);

        if (!($this->load($params) && $this->validate())) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            // 'id' => $this->id,
            'num_catalogacio' => $this->num_catalogacio,
            'autors.autor' => $this->fk_autor,
        ]);

        $query->andFilterWhere(['like', 'autors.autor', $this->getAttribute('fkAutor.autor')])
            ->andFilterWhere(['like', 'titol', $this->titol])
            ->andFilterWhere(['like', 'fk_localitzacio', $this->fk_localitzacio])
            ->andFilterWhere(['like', 'orq_simfonica', $this->orq_simfonica])
            ->andFilterWhere(['like', 'orq_classica', $this->orq_classica])
            ->andFilterWhere(['like', 'corda', $this->corda])
            ->andFilterWhere(['like', 'orq_corda', $this->orq_corda])
            ->andFilterWhere(['like', 'vent', $this->vent])
            ->andFilterWhere(['like', 'cambra_mixta', $this->cambra_mixta])
            ->andFilterWhere(['like', 'partitura', $this->partitura])
            ->andFilterWhere(['like', 'particella', $this->particella])
            ->andFilterWhere(['like', 'copia_seguretat', $this->copia_seguretat])
            ->andFilterWhere(['like', 'fk_genere', $this->fk_genere])
            ->andFilterWhere(['like', 'plantilla', $this->plantilla]);

        return $dataProvider;
    }
}
