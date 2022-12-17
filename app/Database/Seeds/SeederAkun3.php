<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAkun3 extends Seeder
{
  public function run()
  {
    $data = [
      [
        'kode_akun3' => 1101,
        'nama_akun3' => 'Kas',
        'kode_akun2' => '11',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun3' => 1102,
        'nama_akun3' => 'Piutang Usaha',
        'kode_akun2' => '11',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun3' => 1201,
        'nama_akun3' => 'Peralatan Kantor',
        'kode_akun2' => '12',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun3' => 1202,
        'nama_akun3' => 'Akumulasi Penyusunan P Kantor',
        'kode_akun2' => '12',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun3' => 2101,
        'nama_akun3' => 'Utang Usaha',
        'kode_akun2' => '21',
        'kode_akun1' => '2',
      ],
      [
        'kode_akun3' => 3101,
        'nama_akun3' => 'Modal Pemilik',
        'kode_akun2' => '31',
        'kode_akun1' => '3',
      ],
      [
        'kode_akun3' => 3201,
        'nama_akun3' => 'Prive Pemilik',
        'kode_akun2' => '32',
        'kode_akun1' => '3',
      ],
      [
        'kode_akun3' => 4101,
        'nama_akun3' => 'Pendapatan Usaha',
        'kode_akun2' => '41',
        'kode_akun1' => '4',
      ],
      [
        'kode_akun3' => 4201,
        'nama_akun3' => 'Pendapatan Diluar Usaha',
        'kode_akun2' => '42',
        'kode_akun1' => '4',
      ],
      [
        'kode_akun3' => 5101,
        'nama_akun3' => 'Beban Usaha',
        'kode_akun2' => '51',
        'kode_akun1' => '5',
      ],
    ];

    // Simple Queries
    // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);
    // Using Query Builder
    //
    $this->db->table('akun3s')->InsertBatch($data);
  }
}
