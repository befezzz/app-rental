<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Barang</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach ($camp as $cm) : ?>

                    <form method="POST" action="<?= base_url('admin/data_camp/update_barang_aksi') ?>" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Type Barang</label>
                                    <input type="hidden" name="id_barang" value="<?= $cm->id_barang ?>">
                                    <select name="kode type" class="form-control">
                                        <option value="<?= $cm->kode_type ?>"><?= $cm->kode_type ?></option>
                                        <?php foreach ($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type ?>">
                                                <?= $tp->nama_type ?></option>
                                        <?php endforeach; ?>
                                    </select>

                                    <?= form_error('kode_type', '<div class="text-small
                        text-danger">', '</div>') ?>

                                </div>

                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?= $cm->merk ?>">
                                </div>

                                <?php echo form_error('merk', '<div class="text-small
                        text-danger">', '</div>') ?>

                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?= $cm->warna ?>">
                                    <?php echo form_error('warna', '<div class="text-small
                                         text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $cm->harga ?>">
                                    <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" name="denda" class="form-control" value="<?php echo $cm->denda ?>">
                                    <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" value="<?= $cm->keterangan ?>">
                                </div>

                                <?php echo form_error('keterangan', '<div class="text-small
                        text-danger">', '</div>') ?>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if ($cm->status == "1") {
                                                    echo "selected = 'selected'";
                                                }
                                                echo $cm->status; ?> value="1"> Tersedia </option>
                                        <option <?php if ($cm->status == "0") {
                                                    echo "selected = 'selected'";
                                                }
                                                echo $cm->status; ?> value="0"> Tidak Tersedia </option>
                                    </select>
                                </div>

                                <?php echo form_error('status', '<div class="text-small
                        text-danger">', '</div>') ?>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">S i m p a n</button>
                                <button type="reset" class="btn btn-danger mt-4">R e s e t</button>

                            </div>
                        </div>
                    </form>

                <?php endforeach; ?>
            </div>
        </div>

    </section>
</div>