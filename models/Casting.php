<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "casting".
 *
 * @property integer $id
 * @property string $nom
 * @property string $cognoms
 * @property string $data_naix
 * @property string $nif
 * @property string $adresa
 * @property string $cp
 * @property string $poblacio
 * @property string $comarca
 * @property integer $telf_mobil
 * @property string $email
 * @property string $formacio_teatral
 * @property string $formacio_dansa
 * @property string $formacio_arts
 * @property string $formacio_musical
 * @property string $observacions
 */
class Casting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'casting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'cognoms', 'data_naix', 'nif', 'adresa', 'cp', 'poblacio', 'comarca', 'telf_mobil', 'email', 'formacio_teatral', 'formacio_dansa', 'formacio_arts', 'formacio_musical'], 'required'],
            [['data_naix'], 'safe'],
            [['telf_mobil'], 'integer'],
            [['nom', 'cognoms', 'nif', 'adresa', 'cp', 'poblacio', 'comarca', 'email'], 'string', 'max' => 100],
            [['formacio_teatral', 'formacio_dansa', 'formacio_arts', 'formacio_musical', 'observacions'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nom',
            'cognoms' => 'Cognoms',
            'data_naix' => 'Data Naix',
            'nif' => 'NIF',
            'adresa' => 'Adreça',
            'cp' => 'CP',
            'poblacio' => 'Població',
            'comarca' => 'Comarca',
            'telf_mobil' => 'Telf Mòbil',
            'email' => 'Email',
            'formacio_teatral' => 'Form. Teatral',
            'formacio_dansa' => 'Form. Dansa',
            'formacio_arts' => 'Form. Arts',
            'formacio_musical' => 'Form. Musical',
            'observacions' => 'Observacions',
        ];
    }
}
