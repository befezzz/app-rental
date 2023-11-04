<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>
    <form method="POST" action="<?= base_url('admin/laporan') ?>">
    <div class="form-group">
        <label>Dari Tanggal</label>
        <input type="date" name="dari" class="form-control">
        <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>') ?>
    </div>
    <div class="form-group">
        <label>Sampai Tanggal</label>
        <input type="date" name="sampai" class="form-control">
        <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>') ?>
    </div>
    <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
</form><hr>
<div class="btn-group">
    <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"></i> Print</a>
</div>
<div class="table-responsive mt-3">
        <?= $this->session->flashdata('pesan'); ?>
            <table class=" table table-bordered table-striped">
                <tr>
                    <th>NO</th>
                    <th>Customer</th>
                    <th>Barang</th>
                    <th>Tanggal Rental</th>
                    <th>Tanggal Kembali</th>
                    <th>Harga / Hari</th>
                    <th>Denda / Hari</th>
                    <th>Total Denda</th>
                    <th>Tgl. Dikembalikan</th>
                    <th>Status Pengembalian</th>
                    <th>Status Rental</th>
                </tr>

                <?php $no=1;
                foreach($laporan as $lp): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $lp->nama ?></td>
                        <td><?php echo $lp->merk ?></td>
                        <td><?php echo date('d/m/Y', strtotime($lp->tanggal_rental)); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($lp->tanggal_kembali)); ?></td>
                        <td>Rp. <?php echo number_format($lp->harga,0,',','.'); ?></td>
                        <td>Rp. <?php echo number_format($lp->denda,0,',','.'); ?></td>
                        <td>Rp. <?php echo number_format($lp->total_denda,0,',','.'); ?></td>
                        <td>
                            <?php 
                                if($lp->tanggal_pengembalian == "0000-00-00"){
                                    echo "-";
                                }else{
                                    echo date('d/m/Y', strtotime($lp->tanggal_pengembalian));
                                } 
                            ?>
                        </td>
                        <td><?php echo $lp->status_pengembalian ?></td>
                        <td><?php echo $lp->status_rental ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
</div>