<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groups".
 *
 * @property integer $id
 * @property string $name
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'กลุ่มงาน',
        ];
    }
    //สร้าง Relation ของตาราง เพื่อแสดงชื่อแทน ID
    public function getGroupdep(){
        return $this->hasMany(Departments::className(), ['group_id'=>'id']);
    }
}
