<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="col-lg-7">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <h3>Sign Up</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('auth/register') ?>">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="nama" autocomplete="off" class="form-control" placeholder="Nama">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="userid" autocomplete="off" class="form-control" placeholder="username">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="email">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" autocomplete="off" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center links">
                        Telah memiliki akun?<a href="<?= base_url('Auth') ?>">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>