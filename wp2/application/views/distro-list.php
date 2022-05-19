<!-- Projects -->
<div id="projects" class="filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">Terbaik Bulan Ini</div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="grid">
                    <?php
                    $i = 0;
                    foreach ($list as $tampil) :
                        if ($i == 4) {
                            break;
                        }
                    ?>
                        <div class="element-item ">
                            <a class="popup-with-move-anim" href="#a-<?= $tampil['id'] ?>">
                                <div class="element-item-overlay"><span><?= $tampil['nama_distro'] ?></span></div><img src="<?php echo base_url(); ?>upload/<?php echo $tampil['foto']; ?>" alt="alternative" style="width: 356px; height: 318px;">
                            </a>
                        </div>
                    <?php
                        $i++;
                    endforeach
                    ?>
                </div> <!-- end of grid -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of filter -->
<!-- end of projects -->

<?php
foreach ($list as $tampil) {
?>
    <!-- Lightbox -->
    <div id="a-<?= $tampil['id'] ?>" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="<?php echo base_url(); ?>upload/<?php echo $tampil['foto']; ?>" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3><?= $tampil['nama_distro'] ?></h3>
                <hr class="line-heading"> <br>
                <p>Alamat</p>
                <h6><?= $tampil['alamat'] ?></h6>
                <p>Nomer Kontak</p>
                <h6><?= $tampil['no_telp'] ?></h6>
                <a class="btn-solid-reg" target="_blank" href="<?php echo $tampil['web'] ?>">Lihat Toko</a>
                <a class="btn-solid-reg" target="_blank" href="http://maps.google.com/maps?q=<?php echo $tampil['latitude'] ?>,<?php echo $tampil['longitude'] ?>">Lihat Di Maps</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
<?php
}
?>