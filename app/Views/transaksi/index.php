<?= $this->extend('layout/backend') ?>;

<?= $this->section('content') ?>
<title>SIA AKN UMB &mdash; Transaksi </title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="section">
          <div class="section-header">
            <!-- <h1>Blank Page</h1> -->
            <a href="<?= site_url('transaksi/new') ?>" class="btn btn-primary"> Add New </a>
          </div>

          <!-- Untuk menampilkan alert pada bawaaan with -->
  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissable show fade">
      <div class="alser-body">
        <button class="close" data-dismiss="alert"> x </button>
        <?= session()->getFlashdata('success') ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissable show fade">
      <div class="alser-body">
        <button class="close" data-dismiss="alert"> x </button>
        <?= session()->getFlashdata('error') ?>
      </div>
    </div>
  <?php endif; ?>
    
          <div class="section-body">
          <!-- Dinamis -->
          <div class="card">
                  <div class="card-header">
                    <h4>Data Akun 3</h4>
                  </div>
                  <div class="card-body p-4">
                    <div class="table-responsive">
                      <table class="table table-striped table-md" id="myTable">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Akun 1</th>
                          <th>Nama Akun 2</th>
                          <th>Kode Akun 3</th>
                          <th>Nama Akun 3</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dttransaksi as $key => $value): ?>
                        <tr>
                          <td><?= $key + 1 ?></td>
                          <td><?= $value->kwitansi ?></td>
                          <td><?= $value->tanggal ?></td>
                          <td><?= $value->deskripsi ?></td>
                          <td><?= $value->ketjurnal ?></td>
                          <td class="text-center" style="width: 15%;">
<a href="<?= site_url('transaksi/' . $value->id_transaksi) .
  '/edit' ?>" class="btn btn-warning"><i class="fas fa-pencil-alt btn-small"></i> Edit </a>
                            
<form action="<?= site_url(
  'transaksi/' . $value->id_transaksi
) ?>" method="post" id="del-<?= $value->id_transaksi ?>"  class="d-inline">

                            <?= csrf_field() ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-small" data-confirm="Hapus Data? | Anda Yakin?" data-confirm-yes="hapus(<?= $value->id_transaksi ?>)"><i class="fas fa-trash"> Delete </i></button>
                            </form>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>  
                    </table>
                    </div>
                   </div>
                </div>
          </div>


        </section>

        <?= $this->endSection() ?>
