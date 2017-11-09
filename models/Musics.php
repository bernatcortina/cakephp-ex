<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "musics".
 *
 * @property integer $id
 * @property string $cognoms
 * @property string $nom
 * @property string $instrument
 * @property integer $id_instrument
 * @property string $data_naix
 * @property string $lloc
 * @property string $adresa
 * @property string $cp
 * @property string $poblacio
 * @property string $comarca
 * @property string $telefon
 * @property string $fax
 * @property string $tel_mobil
 * @property string $mail
 * @property string $dni
 * @property string $num_ss
 * @property string $num_cc
 * @property string $aseguransa_instrument
 * @property string $titular
 * @property string $projecte_pedagogic
 * @property integer $preu_assistencia
 * @property integer $preu_concert
 */
class Musics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'musics';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'cognoms'], 'required'],
            [['id', 'id_instrument', 'preu_assistencia', 'preu_concert'], 'integer'],
            [['cognoms', 'poblacio'], 'string', 'max' => 39],
            [['nom'], 'string', 'max' => 22],
            [['instrument'], 'string', 'max' => 24],
            [['data_naix'], 'string', 'max' => 100],
            [['lloc', 'telefon'], 'string', 'max' => 31],
            [['adresa'], 'string', 'max' => 58],
            [['cp'], 'string', 'max' => 16],
            [['comarca'], 'string', 'max' => 21],
            [['fax'], 'string', 'max' => 9],
            [['tel_mobil'], 'string', 'max' => 82],
            [['mail'], 'email'],
            [['dni'], 'string', 'max' => 12],
            [['num_ss'], 'string', 'max' => 15],
            [['num_cc'], 'string', 'max' => 26],
            [['aseguransa_instrument'], 'string', 'max' => 29],
            [['titular', 'projecte_pedagogic'], 'string', 'max' => 20],
            [['nom', 'cognoms', 'instrument', 'lloc', 'adresa', 'poblacio', 'comarca', 'dni', 'num_cc','aseguransa_instrument', 'titular', 'projecte_pedagogic'], 'filter', 'filter' => function($value) {
                $value = strtoupper($value);
                return $value;
            }]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cognoms' => 'Cognoms',
            'nom' => 'Nom',
            'instrument' => 'Instrument',
            'id_instrument' => 'Id Instrument',
            'data_naix' => 'Data Naix',
            'lloc' => 'Lloc',
            'adresa' => 'Adreça',
            'cp' => 'CP',
            'poblacio' => 'Població',
            'comarca' => 'Comarca',
            'telefon' => 'Telf.',
            'fax' => 'Fax',
            'tel_mobil' => 'Tlf. Mòbil',
            'mail' => 'E-mail',
            'dni' => 'DNI',
            'num_ss' => 'Núm SS',
            'num_cc' => 'Núm CC',
            'aseguransa_instrument' => 'Assegurança instrument',
            'titular' => 'Titular',
            'projecte_pedagogic' => 'Projecte Pedagògic',
            'preu_assistencia' => 'Preu Assistència',
            'preu_concert' => 'Preu Concert',
        ];
    }
}
