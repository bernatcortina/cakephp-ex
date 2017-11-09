<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autors".
 *
 * @property integer $id
 * @property string $autor
 *
 * @property Partitures[] $partitures
 */
class Autors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['autor'], 'required'],
            [['autor'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autor' => 'Autor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartitures()
    {
        return $this->hasMany(Partitures::className(), ['fk_autor' => 'autor']);
    }
}
