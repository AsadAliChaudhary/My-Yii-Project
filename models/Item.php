<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property string $Item_name
 * @property integer $Item_id
 * @property integer $Cat_id
 *
 * @property Inventory[] $inventories
 * @property Category $cat
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Item_name', 'Item_id', 'Cat_id'], 'required'],
            [['Item_id', 'Cat_id'], 'integer'],
            [['Item_name'], 'string', 'max' => 100],
            [['Cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['Cat_id' => 'cat_Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Item_name' => 'Item Name',
            'Item_id' => 'Item ID',
            'Cat_id' => 'Cat ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['Item_Id' => 'Item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['cat_Id' => 'Cat_id']);
    }
}
