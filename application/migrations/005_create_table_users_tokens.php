<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_users_tokens extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => TRUE
            ),
            'chooser' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE
            ),
            'hash' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE
            ),
            'type' => array(
                'type' => 'ENUM("validation","password")',
                'default' => 'validation',
                'null' => FALSE
            ),
            'data' => array(
                'type' => 'JSON',
                'default' => '\'\''
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            ),
            'expired_at' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table('users_tokens');
    }

    public function down()
    {
        $this->dbforge->drop_table('users_tokens');
    }
}
