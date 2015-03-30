<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_town".
 *
 * @property string $id
 * @property string $town_name
 *
 * @property Cars[] $cars
 */
class Town extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_town';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['town_name'], 'required'],
            [['town_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'town_name' => 'Town Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_town' => 'id']);
    }
}
