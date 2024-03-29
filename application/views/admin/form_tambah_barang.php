<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Data Barang</h1>
        </div>
        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/data_camp/tambah_barang_aksi') ?>" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Type Barang</label>
                                <select name="kode type" class="form-control">
                                    <option value="">-- Pilih Type --</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>">
                                            <?php echo $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <?php echo form_error('kode_type', '<div class="text-small
                        text-danger">', '</div>') ?>

                            </div>

                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control">
                            </div>

                            <?php echo form_error('merk', '<div class="text-small
                        text-danger">', '</div>') ?>

                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control">
                            
                            
                            </div>

                            <?php echo form_error('warna', '<div class="text-small
                                         text-danger">', '</div>') ?>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control">
                            </div>

                            <?php echo form_error('keterangan', '<div class="text-small
                        text-danger">', '</div>') ?>

                        </div>

                        <div class="class form-group">
                            <label>Harga Sewa/Hari</label>
                            <input type="number" name="harga" class="form-control">
                           
                        </div>
                            <?php echo form_error('harga','<div class="text-small text-danger">','</div>') ?>
                        <div class="class form-group">
                            <label>Denda</label>
                            <input type="number" name="denda" class="form-control">
                            <?php echo form_error('denda','<div class="text-small text-danger">','</div>') ?>
                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="1"> Tersedia </option>
                                    <option value="0">Tidak Tersedia</option>
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
            </div>
        </div>

    </section>
</div>