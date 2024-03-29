<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Barang</h1>
        </div>
        <a href="<?php echo base_url('admin/data_camp/tambah_barang'); ?>" class="btn btn-primary mb-3">Tambah Data</a>

        <?php echo $this->session->flashdata('pesan'); ?>
        

        <table class="table table-hover table-striped table-responsive table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>Warna</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th width="180px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($camp as $cm) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>

                            <img width="60px" src="<?php echo base_url() . 'assets/upload/' . $cm->gambar ?>">

                        </td>
                        <td><?= $cm->kode_type ?></td>
                        <td><?= $cm->merk ?></td>
                        <td><?= $cm->warna ?></td>
                        <td><?= $cm->keterangan ?></td>
                        <td><?php
                            if ($cm->status == "0") {
                                echo "<span class='badge badge-danger'> Tidak tersedia </span>";
                            } else {
                                echo "<span class='badge badge-primary'> Tersedia </span>";
                            }
                            ?></td>
                        <td>
                            <a href="<?= base_url('admin/data_camp/detail_barang/') . $cm->id_barang; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('admin/data_camp/delete_barang/') . $cm->id_barang; ?>" class="btn btn-sm btn-danger" onclick="return confirm('seriously?')"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('admin/data_camp/update_barang/') . $cm->id_barang; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>