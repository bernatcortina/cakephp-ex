<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partitures".
 *
 * @property integer $id
 * @property string $fk_autor
 * @property string $titol
 * @property string $fk_localitzacio
 * @property string $orq_simfonica
 * @property string $orq_classica
 * @property string $corda
 * @property string $orq_corda
 * @property string $vent
 * @property string $cambra_mixta
 * @property string $partitura
 * @property string $particella
 * @property string $copia_seguretat
 * @property string $fk_genere
 * @property string $plantilla
 * @property integer $num_catalogacio
 *
 * @property Autors $fkAutor
 * @property Localitzacions $fkLocalitzacio
 * @property Generes $fkGenere
 */
class Partitures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partitures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fk_autor', 'titol', 'fk_localitzacio', 'orq_simfonica', 'orq_classica', 'corda', 'orq_corda', 'vent', 'cambra_mixta', 'partitura', 'particella', 'copia_seguretat', 'fk_genere', 'plantilla', 'num_catalogacio'], 'required'],
            [['num_catalogacio','fk_autor'], 'integer'],
            [['fk_localitzacio', 'fk_genere', 'plantilla'], 'string', 'max' => 100],
            [['titol'], 'string', 'max' => 200],
            [['orq_simfonica', 'orq_classica', 'corda', 'orq_corda', 'vent', 'cambra_mixta', 'partitura', 'particella', 'copia_seguretat'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_autor' => 'Autor',
            'titol' => 'Títol',
            'fk_localitzacio' => 'Localització',
            'orq_simfonica' => 'Orquestra Simfònica',
            'orq_classica' => 'Orquestra Clàssica',
            'corda' => 'Corda',
            'orq_corda' => 'Orquestra Corda',
            'vent' => 'Vent',
            'cambra_mixta' => 'Cambra Mixta',
            'partitura' => 'Partitura',
            'particella' => 'Particella',
            'copia_seguretat' => 'Còpia Seguretat',
            'fk_genere' => 'Gènere',
            'plantilla' => 'Plantilla',
            'num_catalogacio' => 'Num.',
            // 'fk_autor.autor' => 'Autor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkAutor()
    {
        return $this->hasOne(Autors::className(), ['id' => 'fk_autor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkLocalitzacio()
    {
        return $this->hasOne(Localitzacions::className(), ['id' => 'fk_localitzacio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkGenere()
    {
        return $this->hasOne(Generes::className(), ['id' => 'fk_genere']);
    }
}
