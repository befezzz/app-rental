<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Konfirmasi Pembayaran</h1>
        </div>
        <center class="card" style="width: 55%;">
            <div class="card-header">
                Konfirmasi Pembayaran
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url('admin/transaksi/cek_pembayaran') ?>">
                <?php foreach($pembayaran as $byr) : ?>
                    <a class="btn btn-sm btn-success" href="<?= base_url('admin/transaksi/download_pembayaran/'.$byr->id_rental) ?>"><i class="fas fa-download"></i> Download Bukti Pembayaran</a>
                    <div class="custom-control custom-switch ml-5">
                    <input type="hidden" class="custom-control-input" value="<?= $byr->id_rental ?>" name="id_rental">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1" value="1" name="status_pembayaran">
                    <label for="customSwitch1" class="custom-control-label">Konfirmasi Pembayaran</label>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <?php endforeach; ?>
            </form>
            </div>
        </center>
    </section>
</div>