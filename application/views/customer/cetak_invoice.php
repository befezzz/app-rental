
<table style="width: 50%">
    <?php foreach ($transaksi as $tr) : ?>
        <h2>Invoice Pembayaran Anda</h2>
        <tr>
            <td> Nama</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>

        <tr>
            <td>Merek barang</td>
            <td>:</td>
            <td><?php echo $tr->merk ?></td>
        </tr>

        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_rental ?></td>
        </tr>

        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>

        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jmlHari = abs(($x - $y)/(60*60*24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jmlHari ?> hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php if($tr->status_pembayaran == '0'){
                    echo " Belum Lunas";
                }else{
                    echo "Lunas";
                } ?>
            </td>
        </tr>

        <tr style="font-weight: bold; color: red">
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_rental);
            $jmlHari = abs(($x - $y)/(60*60*24));
            ?>
            <td>JUMLAH PEMBAYARAN</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga * $jmlHari, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li>Bank Mandiri 1357910</li>
                    <li>Bank BCA 2468910</li>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>
