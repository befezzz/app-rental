<h3 Style="text-align: center"> Laporan Transaksi Rental Camp</h3>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Dari Sampai</td>
        <td>:</td>
        <td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
    </tr>
</table>

<table class=" table table-bordered table-striped mt-4">
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

<script type="text/javascript">
    window.print();
</script>