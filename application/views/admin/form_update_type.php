<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form update Type Barang</h1>
        </div>
    </div>

    <?php foreach ($type as $tp) : ?>
        <form method="POST" action="<?= base_url('admin/data_type/update_type_aksi'); ?>">
            <div class="form-group">
                <label>Kode Type</label>
                <input type="hidden" name="id_type" value="<?= $tp->id_type ?>">
                <input type="text" name="kode_type" class="form-control" value="<?= $tp->kode_type ?>">
                <?= form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Type</label>
                <input type="text" name="nama_type" class="form-control" value="<?= $tp->nama_type ?>">
                <?= form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    <?php endforeach; ?>

</div>