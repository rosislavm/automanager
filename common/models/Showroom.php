<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_showroom".
 *
 * @property string $sh_id
 * @property string $sh_name
 * @property string $sh_address
 * @property string $sh_user_id
 *
 * @property Cars[] $cars
 * @property Users $shUser
 * @property UserShowroom[] $userShowrooms
 */
class Showroom extends \yii\db\ActiveRecord
{
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
            [['sh_name', 'sh_address', 'sh_user_id'], 'required'],
            [['sh_user_id'], 'integer'],
            [['sh_name', 'sh_address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sh_id' => 'Sh ID',
            'sh_name' => 'Име на шоурум',
            'sh_address' => 'Адрес',
            'sh_user_id' => 'Sh User ID',
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
    public function getShUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'sh_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserShowrooms()
    {
        return $this->hasMany(UserShowroom::className(), ['id_showroom' => 'sh_id']);
    }
}
