<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_table_menu extends CI_Migration
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
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => FALSE
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
            ),
            'target' => array(
                'type' => 'ENUM("_self","_blank")',
                'default' => '_self',
                'null' => FALSE
            ),
            'type' => array(
                'type' => 'ENUM("default","dropdown")',
                'default' => 'default',
                'null' => FALSE
            ),
            'parent' => array(
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => TRUE,
                'default' => 0
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('menu');

        $data = array(
            array('name' => 'More', 'url' => '#', 'icon' => 'fas fa-bars', 'target' => '_self', 'type' => 'dropdown', 'parent' => 0),
            array('name' => 'Bugtracker', 'url' => 'bugtracker', 'icon' => 'fas fa-bug', 'target' => '_self', 'type' => 'default', 'parent' => 1),
            array('name' => 'Changelogs', 'url' => 'changelogs', 'icon' => 'fas fa-scroll', 'target' => '_self', 'type' => 'default', 'parent' => 1),
            array('name' => 'PvP', 'url' => 'pvp', 'icon' => 'fas fa-fist-raised', 'target' => '_self', 'type' => 'default', 'parent' => 1),
            array('name' => 'Forums', 'url' => 'forum', 'icon' => 'fas fa-comments', 'target' => '_self', 'type' => 'default', 'parent' => 0),
            array('name' => 'Store', 'url' => 'store', 'icon' => 'fas fa-store', 'target' => '_self', 'type' => 'default', 'parent' => 0)
        );
        $this->db->insert_batch('menu', $data);
    }

    public function down()
    {
        $this->dbforge->drop_table('menu');
    }
}
