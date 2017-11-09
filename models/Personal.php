<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $nom
 * @property string $cognoms
 * @property string $empresa
 * @property integer $telefon
 * @property string $email
 *
 * @property Inventari[] $inventaris
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom', 'cognoms', 'empresa', 'telefon', 'email'], 'required'],
            [['telefon'], 'integer'],
            [['nom', 'cognoms', 'empresa', 'email'], 'string', 'max' => 100]
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
            'empresa' => 'Empresa',
            'telefon' => 'Telefon',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventaris()
    {
        return $this->hasMany(Inventari::className(), ['responsable_entrada' => 'id']);
    }
}
