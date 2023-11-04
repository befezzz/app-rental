<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand text-center">
              <img src="<?php echo base_url('assets/assets_shop/') ?>/img/lg.png" alt="logo" width="100" class="shadow-light rounded-circle mt-5 col-lg-4">
            </div>

            <div class="card card-dark mt-3 mb-5">
              <div class="card-header">
                <h4 style="color: black;">Register</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('register'); ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" autofocus>

                      <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>

                    </div>
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="email" class="form-control" name="username" value="<?= set_value('username'); ?>">

                      <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>

                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat" value="<?= set_value('alamat'); ?>">

                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>

                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Gender</label>

                      <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>

                      <select class="form-control" name="gender" value="<?= set_value('gender'); ?>">
                        <option value="">-- Pilih Gender --</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                        <option>Khusus</option>
                      </select>

                    </div>
                    <div class="form-group col-6">
                      <label for="no_telepon" class="d-block">No. Telepon</label>
                      <input id="no_telepon" type="text" class="form-control" name="no_telepon" value="<?= set_value('no_telepon'); ?>">

                      <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>

                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>No. KTP</label>
                      <input type="text" name="no_ktp" class="form_control" value="<?= set_value('no_ktp'); ?>">

                      <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>

                    </div>
                    <div class="form-group col-6">
                      <label>password</label>
                      <input type="password" name="password" class="form_control" value="<?= set_value('password'); ?>">

                      <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>

                    </div>

                    <div class="col-lg-12">
                      <button type="submit" class="btn btn-dark btn-lg btn-block" <?= base_url('auth'); ?>>
                        Register
                      </button></div>
                      <!-- <div class="col-lg-6">
                      <button type="submit" class="btn btn-danger btn-lg btn-block" <?= base_url('auth'); ?>>
                        Cancel
                      </button>
                    </div> -->
                </form>
              </div>
            </div>
            <!-- <div class="simple-footer">
              <div class="col-lg-12 text-center">
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> Code Pelita rplsmksa
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>