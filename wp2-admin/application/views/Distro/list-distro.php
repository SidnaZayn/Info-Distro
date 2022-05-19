<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h1 class="m-0 text-dark">Distro List</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="input-group">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-plus"></i> Tambah Data</button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 500px;">
                            <table class="table table-hover table-head-fixed table-distro" id="table-distro">
                                <thead>
                                    <tr>
                                        <th>Distro</th>
                                        <th>Tampak Distro</th>
                                        <th>Alamat</th>
                                        <th>No. Telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($list as $tampil) {

                                    ?>
                                        <tr>
                                            <td><?php echo $tampil['nama_distro'] ?></td>
                                            <td><img src="<?php echo base_url(); ?>upload/<?php echo $tampil['foto']; ?>" alt="foto<?php echo $no++; ?>" width="100px" height="100px"></td>
                                            <td><?php echo $tampil['alamat'] ?></td>
                                            <td><?php echo $tampil['no_telp'] ?></td>
                                            <td>
                                                <?php echo anchor(base_url() . 'Page/ubah_distro/' . $tampil['id'], '<button class="button-ubah" type="button"><i class="fas fa-hammer"></i></button>') ?>
                                                <?php echo anchor(base_url() . 'Page/hapus_distro/' . $tampil['id'], '<button class="button-hapus" type="button"><i class="fas fa-trash"></i></button>') ?>

                                                
                                            </td>

                                            <!-- Modal Hapus-->

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

        </div>
    </div>
</div>