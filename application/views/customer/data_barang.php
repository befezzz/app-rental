<!--== Page Title Area Start ==-->
<section id="page-title-area" class="section-padding overlay ">
    <div class="container">
    
        <div class="row">
            <!-- Page Title Start -->
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>our camp equipment</h2>
                    <span class="title-line"><i class="fa fa-compass"></i></span>
                </div>
            </div>
            <!-- Page Title End -->
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Car List Area Start ==-->
<section id="car-list-area" class="section-padding">
    <div class="container">
    <?= $this->session->flashdata('pesan'); ?>
        <div class="row">
            <!-- Car List Content Start -->
            <div class="col-lg-12">
                <div class="car-list-content">
                    <div class="row">
                        <!-- Single Car Start -->
                        <?php foreach ($camp as $cm) : ?>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <img src="<?= base_url('assets/upload/' . $cm->gambar) ?>" alt="" style="width: 230px; height:210px;" class="ml-3 mt-3" >
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#"><?= $cm->merk ?></a></h2>
                                        <h5>Rp. <?php echo number_format($cm->harga, 0, ',', '.') ?>/hari</h5>

                                        <ul class="car-info-list">
                                            <li><?php
                                                if ($cm->status == "1") {
                                                    echo "<i class='fa fa-check-square text-waning'></i>";
                                                } else {
                                                    echo "<i class='fa fa-times-circle text-danger'></i>";
                                                }
                                                ?>Status</li>

                                            <li><?php
                                            echo "<i class='fa fa-check-square text-waning'></i>";
                                                ?>Harga</li>



                                            <li><?php
                                                echo "<i class='fa fa-check-square text-waning'></i>";
                                                ?>Denda</li>


                                        </ul>
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p>
                                        <?php
                                            if($cm->status == "1"){
                                                echo anchor('customer/rental/tambah_rental/'.$cm->id_barang,'<span class="rent-btn">Rental</span>');
                                            }else{
                                                echo "<span class='rent-btn'>Tidak Tersedia</span>";
                                            }
                                        ?>
                                        <a href="<?= base_url('customer/data_barang/detail_barang/'.$cm->id_barang) ?>" class="rent-btn">Detail</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- Single Car End -->

                    </div>
                </div>

            </div>
            <!-- Car List Content End -->
        </div>
    </div>
</section>
<!--== Car List Area End ==-->



 