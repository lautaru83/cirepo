<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="col-lg-7 align-items-center h-100">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form method="post" action="<?= base_url('auth/register') ?>">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col">
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anda" autocomplete="off" value="<?= set_value('nama');  ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Username</label>
                            <div class="col">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username anda" autocomplete="off" value="<?= set_value('username');  ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email anda" autocomplete="off" value="<?= set_value('email');  ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pasword1" class="col-sm-3 col-form-label">Password</label>
                            <div class="col">
                                <input type="password" name="password1" id="password1" class="form-control" placeholder="Masukkan password" autocomplete="off">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-3 col-form-label">Ulangi Password</label>
                            <div class="col">
                                <input type="password" name="password2" id="password2" class="form-control" placeholder="Ulangi password" autocomplete="off">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                    </form>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center links">
                        Telah memiliki akun? <a href="<?= base_url('Auth') ?>"> Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>