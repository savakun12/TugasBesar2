<?php

namespace App\Controllers;

use App\Models\ModelAkun3;
use App\Models\ModelTransaksi;

use CodeIgniter\RESTful\ResourceController;

class Transaksi extends ResourceController
{
  function __construct()
  {
    $this->objTransaksi = new ModelTransaksi();
    $this->db = \Config\Database::connect();
  }
  /**
   * Return an array of resource objects, themselves in array format
   *
   * @return mixed
   */
  public function index()
  {
    $data['dttransaksi'] = $this->objTransaksi->findAll();
    return view('transaksi/index', $data);
  }

  /**
   * Return the properties of a resource object
   *
   * @return mixed
   */
  public function show($id = null)
  {
    //
  }

  /**
   * Return a new resource object, with default properties
   *
   * @return mixed
   */
  public function new()
  {
    return view('transaksi/new');
  }

  /**
   * Create a new resource object, from "posted" parameters
   *
   * @return mixed
   */
  public function create()
  {
    $data1 = [
      //ini untuk data tbl transaksi
      'kwitansi' => $this->request->getVar('kwitansi'),
      'tanggal' => $this->request->getVar('tanggal'),
      'deskripsi' => $this->request->getVar('deskripsi'),
      'ketjurnal' => $this->request->getVar('ketjurnal'),
    ];
    //simpan data ke tabel transaksi
    $this->db->table('tbl_transaksi')->insert($data1);

    //kita ambil ID dari tabel transaksi
    $id_transaksi = $this->objTransaksi->insertID();
    $kode_akun3 = $this->request->getVar('kode_akun3');
    $debit = $this->request->getVar('debit');
    $kredit = $this->request->getVar('kredit');
    $id_status = $this->request->getVar('id_status');

    return redirect()
      ->to(site_url('transaksi'))
      ->with('success', 'Data berhasil di Simpan');
  }

  /**
   * Return the editable properties of a resource object
   *
   * @return mixed
   */
  public function edit($id = null)
  {
    //
  }

  /**
   * Add or update a model resource, from "posted" properties
   *
   * @return mixed
   */
  public function update($id = null)
  {
    //
  }

  /**
   * Delete the designated resource object from the model
   *
   * @return mixed
   */
  public function delete($id = null)
  {
    //
  }

  public function akun3()
  {
    $akun3 = model(ModelAkun3::class);
    $result = $akun3->findAll();
    return $this->response->setJSON($result);
  }
}
