<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_user_showroom".
 *
 * @property string $id
 * @property string $id_user
 * @property string $id_showroom
 *
 * @property Showroom $idShowroom
 * @property Users $idUser
 */
class UserShowroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_user_showroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_showroom'], 'required'],
            [['id_user', 'id_showroom'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_showroom' => 'Id Showroom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdShowroom()
    {
        return $this->hasOne(Showroom::className(), ['sh_id' => 'id_showroom']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'id_user']);
    }
}
