<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField(array(
            "id" => array('type' => "INT", 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE),
            "username" => array('type' => "VARCHAR", 'constraint' => 100),
            "password" => array('type' => "VARCHAR", 'constraint' => 150),
            "full_name" => array('type' => "VARCHAR", 'constraint' => 100),
            "avatar" => array('type' => "VARCHAR", 'constraint' => 100),
            "is_active" => array('type' => "INT", 'constraint' => 1),
            "created_at" => array('type' => "DATETIME", 'constraint' => 0),
            "deleted_at" => array('type' => "DATETIME", 'constraint' => 0),
        ));
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("users");
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable("users");
    }
}
