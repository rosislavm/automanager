<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_libs_interior".
 *
 * @property string $interior_id
 * @property integer $interior_velure
 * @property integer $interior_right_handdrive
 * @property integer $interior_leather
 *
 * @property Cars[] $cars
 */
class Interior extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_interior';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['interior_velure', 'interior_right_handdrive', 'interior_leather'], 'required'],
            [['interior_velure', 'interior_right_handdrive', 'interior_leather'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'interior_id' => 'Interior ID',
            'interior_velure' => 'Велурен салон',
            'interior_right_handdrive' => 'Десен волан',
            'interior_leather' => 'Кожен салон',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_interior' => 'interior_id']);
    }
}
