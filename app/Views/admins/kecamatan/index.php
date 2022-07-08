<?php $session = session() ?>
<?= $this->extend('admins/utama') ?>
<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url();?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url();?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url();?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kecamatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kecamatan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                <?php if(!empty(session()->getFlashdata('berhasil'))){ ?>
                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('berhasil');?>
                    </div>
                <?php }else if(!empty(session()->getFlashdata('menghapus'))){ ?>
                    <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('menghapus');?>
                    </div>
                <?php }?>
                <?php 
                    $errors = $validation->getErrors();
                    if(!empty($errors))
                    {
                        echo $validation->listErrors();
                    }
                ?>
              <div class="card-header">
                <h3 class="card-title">
                    <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-primary">
                    Tambah Kecamatan
                    </button>    
              </div>
                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Tambah Kecamatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <form action="/datakecamatan/savedatakecamatan" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="Nama">Nama Data Kecamatan</label>
                                    <input type="text" class="form-control" id="Nama" placeholder="Nama" name="nama">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-light">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($kecamatan as $row):?>
                        <tr>
                            <td><?=$row['id'];?></td>
                            <td><?=$row['nama'];?></td>
                            <td>
                                <a href="/datakecamatan/editdatakecamatan/<?=$row['id'];?>" class="btn btn-info">Edit</a>
                                <a href="/datakecamatan/hapusdatakecamatan/<?=$row['id'];?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?= $this->endSection() ?>
  <?= $this->section('script') ?>
<script src="<?= base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url();?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<?= $this->endSection() ?>