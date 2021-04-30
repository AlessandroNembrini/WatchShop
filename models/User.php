<?php

namespace app\models;
use yii\db\ActiveRecord;

/*
    Erbe von ActiveRecord Class um ein "Domain-Model" darzustellen
    Implementiere Yii2 IdentityInterface für Auth-Logik
*/
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
    /*
        Eigenschaften/Properties
        (Domain Model)
    */
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

    /*
        Datenbank-Tabelle mappen
    */
    public static function tableName()
    {
        return "users";
    }


    /**
     * Finde User bei Id
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        //Self ist Model (user) 
        //Query-Methoden ersichtlich auf: https://www.yiiframework.com/doc/api/2.0/yii-db-query
        return self::find()->where(["id" => $id])->one();

        //oder 
        //return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
