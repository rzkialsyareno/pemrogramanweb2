<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBukuTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => 250,
            ],
            'pengarang' => [
                'type'       => 'VARCHAR',
                'constraint' => 250,
            ],
            'tahun' => [
                'type'       => 'INT',
                'constraint' => 5
            ],
            'THUMBNAIL_URL' => [
                'type'       => 'VARCHAR',
                'constraint' => 250,
            ]
        ]);
    }

    public function down()
    {
        //
    }
}
