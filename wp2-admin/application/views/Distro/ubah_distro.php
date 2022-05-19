<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0 text-dark">Ubah Distro</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container">
            <?php foreach ($list as $tampil) { ?>
                <?php echo form_open_multipart('Page/update_distro'); ?>
                <div class="form-group" hidden>
                    <label>ID</label>
                    <input type="text" name="id" class="form-control" value="<?php echo $tampil['id']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Distro</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $tampil['nama_distro']; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat Distro</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $tampil['Alamat']; ?>">
                </div>
                <div class="form-group">
                    <label>No.Telp</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $tampil['no_telp']; ?>">
                </div>
                <div class="form-group">
                    <label>Koordinat</label>
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Longitude</div>
                                </div>
                                <input type="text" name="longitude" class="form-control" value="<?php echo $tampil['longitude']; ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Latitude</div>
                                </div>
                                <input type="text" name="latitude" class="form-control" value="<?php echo $tampil['latitude']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" value="<?php echo base_url(); ?>upload/<?php echo $tampil['foto']; ?>">
                </div>
                    <a href="<?php echo base_url();?>Page/list_distro"><button type="button" class="button-batal">Batal</button></a>
                    <button type="submit" class="button-ubah">Simpan</button>
                <?php echo form_close(); ?>
            <?php } ?>
        </div>
    </div>
</div>