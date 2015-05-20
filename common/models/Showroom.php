<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_showroom".
 *
 * @property string $sh_id
 * @property string $sh_name
 * @property string $sh_address
 *
 * @property Cars[] $cars
 * @property Users $shUser
 * @property UserShowroom[] $userShowrooms
 */
class Showroom extends \yii\db\ActiveRecord
{
    public $users;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_showroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sh_name', 'sh_address'], 'required'],
            [['sh_name', 'sh_address'], 'string', 'max' => 100],
            [['users'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sh_id' => 'Sh ID',
            'sh_name' => 'Име на автосалон',
            'sh_address' => 'Адрес',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_sh_id' => 'sh_id']);
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShowrooms()
    {
        return $this->hasMany(UserShowroom::className(), ['id_showroom' => 'sh_id']);
    }

}
