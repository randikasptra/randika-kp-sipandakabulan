<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin'
            ],
            [
                'username' => 'kec_sukasari',
                'password' => password_hash('sukasari123', PASSWORD_DEFAULT),
                'role'     => 'kecamatan'
            ],
            [
                'username' => 'kel_cipedes',
                'password' => password_hash('cipedes123', PASSWORD_DEFAULT),
                'role'     => 'kelurahan'
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
