<?php

use yii\db\Migration;

/**
 * Class m211026_151051_alldatabase
 */
class m211026_151051_alldatabase extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";
        /* MYSQL */
//        if (!in_array('auth_assignment', $tables)) {
//            if ($dbType == "mysql") {
//                $this->createTable('{{%auth_assignment}}', [
//                    'item_name' => 'VARCHAR(64) NOT NULL',
//                    0 => 'PRIMARY KEY (`item_name`)',
//                    'user_id' => 'VARCHAR(64) NOT NULL',
//                    1 => 'PRIMARY KEY (`user_id`)',
//                    'created_at' => 'INT(11) NULL',
//                ], $tableOptions_mysql);
//            }
//        }

        /* MYSQL */
        if (!in_array('auth_item', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%auth_item}}', [
                    'name' => 'VARCHAR(64) NOT NULL',
                    0 => 'PRIMARY KEY (`name`)',
                    'type' => 'SMALLINT(6) NOT NULL',
                    'description' => 'TEXT NULL',
                    'rule_name' => 'VARCHAR(64) NULL',
                    'data' => 'BLOB NULL',
                    'created_at' => 'INT(11) NULL',
                    'updated_at' => 'INT(11) NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('auth_item_child', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%auth_item_child}}', [
                    'parent' => 'VARCHAR(64) NOT NULL',
                    0 => 'PRIMARY KEY (`parent`)',
                    'child' => 'VARCHAR(64) NOT NULL',
                    1 => 'PRIMARY KEY (`child`)',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('auth_rule', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%auth_rule}}', [
                    'name' => 'VARCHAR(64) NOT NULL',
                    0 => 'PRIMARY KEY (`name`)',
                    'data' => 'BLOB NULL',
                    'created_at' => 'INT(11) NULL',
                    'updated_at' => 'INT(11) NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('product', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%product}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'name' => 'VARCHAR(255) NOT NULL',
                    'description' => 'VARCHAR(255) NOT NULL',
                    'image' => 'VARCHAR(500) NOT NULL',
                    'price' => 'DECIMAL(10,0) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('profile', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%profile}}', [
                    'user_id' => 'INT(11) NOT NULL',
                    0 => 'PRIMARY KEY (`user_id`)',
                    'name' => 'VARCHAR(255) NULL',
                    'public_email' => 'VARCHAR(255) NULL',
                    'gravatar_email' => 'VARCHAR(255) NULL',
                    'gravatar_id' => 'VARCHAR(32) NULL',
                    'location' => 'VARCHAR(255) NULL',
                    'website' => 'VARCHAR(255) NULL',
                    'timezone' => 'VARCHAR(40) NULL',
                    'bio' => 'TEXT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('social_account', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%social_account}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'INT(11) NULL',
                    'provider' => 'VARCHAR(255) NOT NULL',
                    'client_id' => 'VARCHAR(255) NOT NULL',
                    'code' => 'VARCHAR(32) NULL',
                    'email' => 'VARCHAR(255) NULL',
                    'username' => 'VARCHAR(255) NULL',
                    'data' => 'TEXT NULL',
                    'created_at' => 'INT(11) NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('token', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%token}}', [
                    'user_id' => 'INT(11) NULL',
                    'code' => 'VARCHAR(32) NOT NULL',
                    'type' => 'SMALLINT(6) NOT NULL',
                    'created_at' => 'INT(11) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('user', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%user}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'username' => 'VARCHAR(255) NOT NULL',
                    'email' => 'VARCHAR(255) NOT NULL',
                    'password_hash' => 'VARCHAR(60) NOT NULL',
                    'auth_key' => 'VARCHAR(32) NOT NULL',
                    'unconfirmed_email' => 'VARCHAR(255) NULL',
                    'registration_ip' => 'VARCHAR(45) NULL',
                    'flags' => 'INT(11) NOT NULL DEFAULT \'0\'',
                    'confirmed_at' => 'INT(11) NULL',
                    'blocked_at' => 'INT(11) NULL',
                    'updated_at' => 'INT(11) NOT NULL',
                    'created_at' => 'INT(11) NOT NULL',
                    'last_login_at' => 'INT(11) NULL',
                    'last_login_ip' => 'VARCHAR(45) NULL',
                    'auth_tf_key' => 'VARCHAR(16) NULL',
                    'auth_tf_enabled' => 'TINYINT(1) NULL DEFAULT \'0\'',
                    'password_changed_at' => 'INT(11) NULL',
                    'gdpr_consent' => 'TINYINT(1) NULL DEFAULT \'0\'',
                    'gdpr_consent_date' => 'INT(11) NULL',
                    'gdpr_deleted' => 'TINYINT(1) NULL DEFAULT \'0\'',
                    'verification_token' => 'VARCHAR(255) NULL',
                    'status' => 'INT(11) NOT NULL',
                ], $tableOptions_mysql);
            }
        }

        /* MYSQL */
        if (!in_array('user_billing', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%user_billing}}', [
                    'id' => 'INT(11) NOT NULL AUTO_INCREMENT',
                    0 => 'PRIMARY KEY (`id`)',
                    'user_id' => 'INT(11) NOT NULL',
                    'stripe_customer' => 'VARCHAR(100) NOT NULL',
                    'sub_active' => 'TINYINT(4) NOT NULL',
                    'sub_type' => 'VARCHAR(50) NOT NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->createIndex('idx_user_id_7722_00', 'auth_assignment', 'user_id', 0);
        $this->createIndex('idx_rule_name_7891_01', 'auth_item', 'rule_name', 0);
        $this->createIndex('idx_type_7891_02', 'auth_item', 'type', 0);
        $this->createIndex('idx_child_8006_03', 'auth_item_child', 'child', 0);
        $this->createIndex('idx_UNIQUE_provider_client_id_8428_04', 'social_account', 'provider,client_id', 1);
        $this->createIndex('idx_UNIQUE_code_8428_05', 'social_account', 'code', 1);
        $this->createIndex('idx_user_id_8428_06', 'social_account', 'user_id', 0);
        $this->createIndex('idx_UNIQUE_user_id_code_type_8509_07', 'token', 'user_id,code,type', 1);
        $this->createIndex('idx_UNIQUE_username_8597_08', 'user', 'username', 1);
        $this->createIndex('idx_UNIQUE_email_8597_09', 'user', 'email', 1);
        $this->createIndex('idx_user_id_868_10', 'user_billing', 'user_id', 0);

        $this->execute('SET foreign_key_checks = 0');
        $this->addForeignKey('fk_auth_item_7441_00', '{{%auth_assignment}}', 'item_name', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_auth_rule_7881_01', '{{%auth_item}}', 'rule_name', '{{%auth_rule}}', 'name', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_auth_item_7993_02', '{{%auth_item_child}}', 'parent', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_auth_item_7994_03', '{{%auth_item_child}}', 'child', '{{%auth_item}}', 'name', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_8337_04', '{{%profile}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_8419_05', '{{%social_account}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_8501_06', '{{%token}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_user_8671_07', '{{%user_billing}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
        $this->execute('SET foreign_key_checks = 1;');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211026_151051_alldatabase cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211026_151051_alldatabase cannot be reverted.\n";

        return false;
    }
    */
}
