<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventari".
 *
 * @property integer $id
 * @property string $ubicacio
 * @property string $nom
 * @property string $descripcio
 * @property integer $valor
 * @property string $data_sortida
 * @property integer $responsable_sortida
 * @property string $lloc_sortida
 * @property string $data_entrada
 * @property integer $responsable_entrada
 * @property string $observacions
 *
 * @property Personal $responsableSortida
 * @property Personal $responsableEntrada
 */
class Inventari extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventari';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ubicacio', 'nom', 'descripcio', 'valor', 'data_sortida', 'responsable_sortida', 'lloc_sortida', 'data_entrada', 'responsable_entrada', 'observacions'], 'required'],
            [['valor', 'responsable_sortida', 'responsable_entrada'], 'integer'],
            [['data_sortida', 'data_entrada'], 'safe'],
            [['ubicacio', 'nom', 'descripcio', 'lloc_sortida', 'observacions'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ubicacio' => 'Ubicació',
            'nom' => 'Nom',
            'descripcio' => 'Descripció',
            'valor' => 'Valor €',
            'data_sortida' => 'Data Sortida',
            'responsable_sortida' => 'Responsable Sortida',
            'lloc_sortida' => 'Lloc Sortida',
            'data_entrada' => 'Data Entrada',
            'responsable_entrada' => 'Responsable Entrada',
            'observacions' => 'Observacions',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsableSortida()
    {
        return $this->hasOne(Personal::className(), ['id' => 'responsable_sortida']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsableEntrada()
    {
        return $this->hasOne(Personal::className(), ['id' => 'responsable_entrada']);
    }
}
