<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class OrderItemTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'order_item_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'order_ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 5,
            ],
            'subtotal' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);

        $this->forge->addKey('order_item_ID', true);
        $this->forge->addForeignKey('order_ID', 'orders', 'order_ID');
        $this->forge->addForeignKey('product_ID', 'products', 'product_ID');
    }

    public function down()
    {
        $this->forge->dropTable('order_items');
    }
}
