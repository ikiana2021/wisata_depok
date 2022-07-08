<?php $session = session() ?>
<?= $this->extend('admins/utama') ?>
<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url();?>/assets/plugins/summernote/summernote-bs4.min.css">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Data Wisata</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Wisata</h3>
                        </div>
                        <form method="post" action="/datawisata/editdatawisataproses" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="id" class="form-control" value="<?=$wisata->id?>">
                                        <div class="form-group">
                                            <label for="Nama">Nama Wisata</label>
                                            <input type="text" class="form-control" value="<?=$wisata->nama?>" id="Nama" placeholder="Nama" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Alamat</label>
                                            <input type="text" class="form-control" value="<?=$wisata->alamat?>" id="Alamat" placeholder="Alamat" name="alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="Latlong">Latlong</label>
                                            <input type="text" class="form-control" value="<?=$wisata->latlong?>" id="Latlong" placeholder="Latlong" name="latlong">
                                        </div>
                                        <div class="form-group">
                                            <label for="Skor">Skor Rating (1 - 5)</label>
                                            <input type="text" class="form-control" value="<?=$wisata->skor_rating?>" id="Skor" placeholder="Skor Rating" name="skor_rating">
                                        </div>
                                        <div class="form-group">
                                            <label for="JumlahDokter">Harga Tiket</label>
                                            <input type="number" class="form-control" value="<?=$wisata->harga_tiket?>" id="Harga Tiket" placeholder="Harga Tiket" name="harga_tiket">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Wisata</label>
                                            <select class="form-control select2" style="width: 100%;" name="jenis_id">
                                                <?php foreach($jenis as $row):?>
                                                    <option value="<?=$row['id'];?>" <?=$row['id'] == $wisata->jenis_id ? "selected" : null?>><?=$row['nama'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="form-control select2" style="width: 100%;" name="kecamatan_id">
                                                <?php foreach($kecamatan as $kec):?>
                                                    <option value="<?=$kec['id'];?>" <?=$kec['id'] == $wisata->kecamatan_id ? "selected" : null?>><?=$kec['nama'];?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 1</label>
                                            <input type="file" class="form-control" id="Foto1" name="foto1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 2</label>
                                            <input type="file" class="form-control" id="Foto2" name="foto2">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Foto 3</label>
                                            <input type="file" class="form-control" id="Foto3" name="foto3">
                                        </div>
                                        <div class="form-group">
                                            <label for="Website">Website</label>
                                            <input type="text" class="form-control" value="<?=$wisata->website?>" id="Website" placeholder="Website" name="website">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Fasilitas</label>
                                            <textarea id="editor1" class="form-control" name="fasilitas"><?=$wisata->fasilitas?></textarea>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url();?>/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?=base_url();?>/assets/ckeditor4/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<?= $this->endSection() ?>