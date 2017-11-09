<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "produccions".
 *
 * @property integer $id
 * @property string $nom
 * @property string $data
 * @property resource $fitxa
 */
class Produccions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $fitxa_prod;


    public static function tableName()
    {
        return 'produccions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom'], 'required'],

            [['data','fitxa_prod','fitxa'], 'safe'],
            [['fitxa_prod'], 'file', 'extensions'=>'jpg, gif, png, tif, bmp, pdf, doc, docx'],


            [['fitxa'], 'string'],
            [['nom'], 'string', 'max' => 200]
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
            'data' => 'Data',
            'fitxa' => 'Fitxa',
            'fitxa_prod' => 'Fitxa convocatòria'
        ];
    }
}
