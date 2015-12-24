<?php

use yii\db\Schema;
use yii\db\Migration;

class m151223_194637_insert_admin_user extends Migration
{
    /**
     * migration table name
     */
    public $tableName = '{{%user}}';

    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert(
            $this->tableName,
            [
                'username' => 'admin',
                'auth_key' => Yii::$app->security->generateRandomString(),
                'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
                'password_reset_token' => Yii::$app->security->generateRandomString(). '_'. time(),
                'email' => 'admin@dev.dev',

                'status' => \common\models\User::STATUS_ACTIVE,

                'created_at' => time(),
                'updated_at' => time(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->truncateTable($this->tableName);
    }
}
