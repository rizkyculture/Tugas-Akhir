<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        $field = [
            'nik'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'id'
            ],
            'nama_lengkap'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'nik'
            ],
            'nama_panggilan'        => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'nama_lengkap'
            ],
            'tempat_lahir'          => [
                'type'              => 'VARCHAR',
                'constraint'        => '35',
                'after'             => 'nama_panggilan'
            ],
            'tanggal_lahir'         => [
                'type'              => 'DATE',
                'null'              => true,
                'after'             => 'tempat_lahir'
            ],
            'alamat'                => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'tanggal_lahir'
            ],
            'nama_ayah'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'alamat'
            ],
            'nama_ibu'              => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'nama_ayah'
            ],
            'pekerjaan'             => [
                'type'              => 'VARCHAR',
                'constraint'        => '255',
                'after'             => 'nama_ibu'
            ],
            'jenis_kelamin'         => [
                'type'              => 'ENUM',
                'constraint'        => ['Pria', 'Wanita'],
                'after'             => 'pekerjaan'
            ],
            'pilihan'               => [
                'type'              => 'ENUM',
                'constraint'        => ['Automatic', 'Manual', 'Kombinasi'],
                'after'             => 'jenis_kelamin'
            ],
            'paket'                 => [
                'type'              => 'ENUM',
                'constraint'        => ['2', '4', '6', '8', '10', '12', '14'],
                'after'             => 'pilihan'
            ],
            'telepon'               => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
                'after'             => 'email'
            ],
            'avatar'                => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'default'           => 'default.png',
                'after'             => 'email'
            ],
            'ktp'                   => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true,
                'after'             => 'email'
            ],
        ];
        $this->forge->addColumn('users', $field);
    }

    public function down()
    {
        //
    }
}