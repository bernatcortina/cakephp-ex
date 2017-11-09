<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "generes".
 *
 * @property integer $id
 * @property string $genere
 *
 * @property Partitures[] $partitures
 */
class Generes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'generes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['genere'], 'required'],
            [['genere'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genere' => 'Gènere',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartitures()
    {
        return $this->hasMany(Partitures::className(), ['fk_genere' => 'genere']);
    }
}
