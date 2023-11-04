<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Barang</h1>
        </div>
    </section>

    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?= base_url().'assets/upload/'.$dt->gambar ?>"  width=470;>
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td> Type Camp</td>
                                <td>
                                    <?php
                                    if ($dt->kode_type == "TC") {
                                        echo "Tas Carier";
                                    } elseif ($dt->kode_type == "TND") {
                                        echo "Sedan";
                                    } elseif ($dt->kode_type == "MTS") {
                                        echo "Matras";
                                    } else {
                                        echo "<span class = 'text-danger'>Type Camp Belum Terdaftarkan </span>";
                                    }
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td> Merk</td>
                                <td><?php echo $dt->merk ?></td>
                            </tr>

                            <tr>
                                <td> warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>

                                <tr>
                                    <td> keterangan</td>
                                    <td><?php echo $dt->keterangan ?></td>
                                </tr>

                                <tr>
                                    <td> status</td>
                                    <td>
                                        <?php
                                        if ($dt->status == "0") {
                                            echo "<span class='bagde bagde-danger'>Tidak Tersedia</span>";
                                        } else {
                                            echo "<span class='bagde bagde-primary'>Tersedia</span>";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td>Rp. <?php echo number_format($dt->harga, 0, ',', '.')  ?></td>
                                </tr>

                                <tr>
                                    <td>Denda</td>
                                    <td>Rp. <?php echo number_format($dt->denda, 0, ',', '.')  ?></td>
                                </tr>

                        </table>
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/Data_camp') ?>"> Back</a>
                        <a class="btn btn-sm btn-primary " href="<?php echo base_url('admin/Data_camp/update_barang/' . $dt->id_barang) ?>"> Update</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>