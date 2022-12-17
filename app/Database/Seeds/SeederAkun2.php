<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeederAkun2 extends Seeder
{
  public function run()
  {
    $data = [
      [
        'kode_akun2' => 11,
        'nama_akun2' => 'Aktiva Lancar',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun2' => 12,
        'nama_akun2' => 'Aktiva Tetap',
        'kode_akun1' => '1',
      ],
      [
        'kode_akun2' => 21,
        'nama_akun2' => 'Utang jangka Pendek',
        'kode_akun1' => '2',
      ],
      [
        'kode_akun2' => 22,
        'nama_akun2' => 'Utang jangka panjang',
        'kode_akun1' => '2',
      ],
      [
        'kode_akun2' => 31,
        'nama_akun2' => 'Modal pemilik',
        'kode_akun1' => '3',
      ],
      [
        'kode_akun2' => 32,
        'nama_akun2' => 'Prive Pemilik',
        'kode_akun1' => '3',
      ],
      [
        'kode_akun2' => 41,
        'nama_akun2' => 'Pendapatan Usaha',
        'kode_akun1' => '4',
      ],
      [
        'kode_akun2' => 42,
        'nama_akun2' => 'Pendapatan diluar Usaha',
        'kode_akun1' => '4',
      ],
      [
        'kode_akun2' => 51,
        'nama_akun2' => 'beban Usaha',
        'kode_akun1' => '5',
      ],
      [
        'kode_akun2' => 52,
        'nama_akun2' => 'Beban diluar usaha',
        'kode_akun1' => '5',
      ],
    ];

    // Simple Queries
    // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);
    // Using Query Builder
    //
    $this->db->table('akun2s')->InsertBatch($data);
  }
}
