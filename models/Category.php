<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $cat_Id
 * @property string $Cat_Name
 *
 * @property Inventory[] $inventories
 * @property Item[] $items
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cat_Name'], 'required'],
            [['Cat_Name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_Id' => 'Cat  ID',
            'Cat_Name' => 'Cat  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['Cat_Id' => 'cat_Id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['Cat_id' => 'cat_Id']);
    }
}
