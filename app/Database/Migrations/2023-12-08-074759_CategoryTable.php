<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_inremect' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('category_ID', true);
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
