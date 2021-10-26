<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%auth_assignment_user}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%auth_assignment}}`
 * - `{{%user}}`
 */
class m211026_153345_create_junction_table_for_auth_assignment_and_user_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%auth_assignment_user}}', [
            'auth_assignment_id' => $this->integer(),
            'user_id' => $this->integer(),
            'created_at' => $this->bigInteger(),
            'PRIMARY KEY(auth_assignment_id, user_id)',
        ]);

        // creates index for column `auth_assignment_id`
        $this->createIndex(
            '{{%idx-auth_assignment_user-auth_assignment_id}}',
            '{{%auth_assignment_user}}',
            'auth_assignment_id'
        );

        // add foreign key for table `{{%auth_assignment}}`
        $this->addForeignKey(
            '{{%fk-auth_assignment_user-auth_assignment_id}}',
            '{{%auth_assignment_user}}',
            'auth_assignment_id',
            '{{%auth_assignment}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-auth_assignment_user-user_id}}',
            '{{%auth_assignment_user}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-auth_assignment_user-user_id}}',
            '{{%auth_assignment_user}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%auth_assignment}}`
        $this->dropForeignKey(
            '{{%fk-auth_assignment_user-auth_assignment_id}}',
            '{{%auth_assignment_user}}'
        );

        // drops index for column `auth_assignment_id`
        $this->dropIndex(
            '{{%idx-auth_assignment_user-auth_assignment_id}}',
            '{{%auth_assignment_user}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-auth_assignment_user-user_id}}',
            '{{%auth_assignment_user}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-auth_assignment_user-user_id}}',
            '{{%auth_assignment_user}}'
        );

        $this->dropTable('{{%auth_assignment_user}}');
    }
}
