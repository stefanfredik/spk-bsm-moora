<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Datasiswa extends Migration
{
    public function up()
    {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment' => true
            ],
            'nisn' => [
                'type' => 'VARCHAR',
                'constraint' => 32
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 64
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true
            ],
            'tanggal_lahir' => [
                'type' => 'DATE'
            ],
            'jenis_kelamin' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true
            ],
            'nama_orangtua' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true
            ],
            'jumlah_tanggungan' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true
            ],
            'no_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true
            ],
            'nama_rekening' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => true
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
