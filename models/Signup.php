<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "signup".
 *
 * @property integer $id
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 * @property string $password
 */
class Signup extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'signup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'password'], 'required'],
            [['firstName', 'lastName', 'username', 'password'], 'string', 'max' => 100],
            [['username'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
    public static function findIdentity($id){
        return static::findOne($id);
    }
 
    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException();
    }
 
    public function getId(){
        return $this->id;
    }
 
    public function getAuthKey()
    {
        
        //throw new NotSupportedException();
    }
 
    public function validateAuthKey($authKey)
    {
       
    throw new NotSupportedException();
    }
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }
 
    public function validatePassword($password){
        return $this->password === $password;
    }
}
