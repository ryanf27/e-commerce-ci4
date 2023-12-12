<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'order_date' => [
                'type' => 'DATETIME',
            ],
            'total_amount' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('order_ID', true);
        $this->forge->addForeignKey('user_ID', 'users', 'user_ID');
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
