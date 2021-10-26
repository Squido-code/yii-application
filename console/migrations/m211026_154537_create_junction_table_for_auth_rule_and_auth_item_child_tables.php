<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_rule_auth_item_child}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%auth_rule}}`
 * - `{{%auth_item_child}}`
 */
class m211026_154537_create_junction_table_for_auth_rule_and_auth_item_child_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_rule_auth_item_child}}', [
            'auth_rule_id' => $this->integer(),
            'auth_item_child_id' => $this->integer(),
            'created_at' => $this->bigInteger(),
            'PRIMARY KEY(auth_rule_id, auth_item_child_id)',
        ]);

        // creates index for column `auth_rule_id`
        $this->createIndex(
            '{{%idx-auth_rule_auth_item_child-auth_rule_id}}',
            '{{%auth_rule_auth_item_child}}',
            'auth_rule_id'
        );

        // add foreign key for table `{{%auth_rule}}`
        $this->addForeignKey(
            '{{%fk-auth_rule_auth_item_child-auth_rule_id}}',
            '{{%auth_rule_auth_item_child}}',
            'auth_rule_id',
            '{{%auth_rule}}',
            'name',
            'CASCADE'
        );

        // creates index for column `auth_item_child_id`
        $this->createIndex(
            '{{%idx-auth_rule_auth_item_child-auth_item_child_id}}',
            '{{%auth_rule_auth_item_child}}',
            'auth_item_child_id'
        );

        // add foreign key for table `{{%auth_item_child}}`
        $this->addForeignKey(
            '{{%fk-auth_rule_auth_item_child-auth_item_child_id}}',
            '{{%auth_rule_auth_item_child}}',
            'auth_item_child_id',
            '{{%auth_item_child}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%auth_rule}}`
        $this->dropForeignKey(
            '{{%fk-auth_rule_auth_item_child-auth_rule_id}}',
            '{{%auth_rule_auth_item_child}}'
        );

        // drops index for column `auth_rule_id`
        $this->dropIndex(
            '{{%idx-auth_rule_auth_item_child-auth_rule_id}}',
            '{{%auth_rule_auth_item_child}}'
        );

        // drops foreign key for table `{{%auth_item_child}}`
        $this->dropForeignKey(
            '{{%fk-auth_rule_auth_item_child-auth_item_child_id}}',
            '{{%auth_rule_auth_item_child}}'
        );

        // drops index for column `auth_item_child_id`
        $this->dropIndex(
            '{{%idx-auth_rule_auth_item_child-auth_item_child_id}}',
            '{{%auth_rule_auth_item_child}}'
        );

        $this->dropTable('{{%auth_rule_auth_item_child}}');
    }
}
