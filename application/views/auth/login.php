<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to SPK.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <?php if($this->session->flashdata('success')){ ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php } elseif ($this->session->flashdata('warning')){ ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo $this->session->flashdata('warning'); ?>
                                </div>
                            <?php } ?>
                            <form class="form-horizontal" action="<?php echo base_url('authcontroller/login'); ?>" method="POST">

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="email" class="form-control" name="username" id="username" placeholder="Enter username" required="">
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required="">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                    <label class="form-check-label" for="remember-check">
                                        Remember me
                                    </label>
                                </div>
                                
                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>
    
                                <div class="mt-4 text-center">
                                    <div>
                                        <p>Don't have an account ? <a href="<?php echo base_url('register') ?>" class="fw-medium text-primary"> Signup now </a> </p>
                                        <p>© 2021 Ulfa. Crafted with <i class="mdi mdi-heart text-danger"></i></p>
                                    </div>
                                </div>
                            </form>
                        </div>
    
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>