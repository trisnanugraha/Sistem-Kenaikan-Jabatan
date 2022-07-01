<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php echo $produk; ?></h3>

                        <p>Total Produk</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?php echo base_url('produk-kopi'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php echo $pesan; ?></h3>

                        <p>Total Pesan</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-comment"></i>
                    </div>
                    <a href="<?php echo base_url('pesan'); ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>