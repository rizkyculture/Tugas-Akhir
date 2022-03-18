<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'          => 'admin',
                'description'   => 'administrator'
            ],
            [
                'name'          => 'siswa',
                'description'   => 'siswa'
            ],
            [
                'name'          => 'instruktur',
                'description'   => 'instruktur'
            ],
        ];
        $this->db->table('auth_groups')->insertBatch($data);
    }
}