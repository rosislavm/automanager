<?php

namespace common\models;

use Yii;
//gfhdurertttwt7568e
/**
 * This is the model class for table "tbl_libs_colours".
 *
 * @property string $colour_id
 * @property string $colour_name
 *
 * @property Cars[] $cars
 */
class Colours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_libs_colours';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['colour_name'], 'required'],
            [['colour_name'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'colour_id' => 'Colour ID',
            'colour_name' => 'Colour Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Cars::className(), ['car_colour' => 'colour_id']);
    }
}
