            <!-- Modal -->
            <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Distro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <?php echo form_open_multipart('Page/tambah_distro'); ?>

                            <label>Nama Distro</label>
                            <input type="text" name="nama_distro" class="form-control"> <br>
                            <label>Alamat</label>
                            <textarea type="textarea" name="alamat" class="form-control"></textarea> <br>
                            <label>Contact Person</label>
                            <input type="text" name="no_telp" class="form-control"> <br>
                            <label>Koordinat</label>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="longitude" class="form-control" placeholder="Longitude">
                                </div>
                                <div class="col">
                                    <input type="text" name="latitude" class="form-control" placeholder="Latitude">
                                </div>
                            </div> <br>
                            <label>Foto Toko</label>
                            <input type="file" name="foto" class="form-control">
                            <br>
                            <div style="float: right;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 10px;">Close</button>
                                <button onclick="tambah()" type="submit" class="btn btn-primary">Save changes</button>
                            </div>

                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>