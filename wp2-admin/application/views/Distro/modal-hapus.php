            <!-- Modal Hapus-->
            <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Anda Akan Menghapus Data?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-body">
                            <div style="float: right;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="margin-right: 10px;">Batal</button>
                                <?php echo anchor(base_url() . 'Page/hapus_distro/' . $tampil['id'], '<button type="button" class="btn btn-primary">Hapus</button>') ?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>