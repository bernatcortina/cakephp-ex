<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localitzacions".
 *
 * @property integer $id
 * @property string $localitzacio
 *
 * @property Partitures[] $partitures
 */
class Localitzacions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'localitzacions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['localitzacio'], 'required'],
            [['localitzacio'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'localitzacio' => 'Localització',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartitures()
    {
        return $this->hasMany(Partitures::className(), ['fk_localitzacio' => 'localitzacio']);
    }
}
