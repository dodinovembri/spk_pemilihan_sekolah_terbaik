        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Free Register</h5>
                                            <p>Get your free SPK account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <?php if($this->session->flashdata('warning')){ ?>
                                        <div class="alert alert-warning" role="alert">
                                            <?php echo $this->session->flashdata('warning'); ?>
                                        </div>
                                    <?php } ?>
                                    <form class="needs-validation" method="POST" action="<?php echo base_url('register/store') ?>">

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter name" required>  
                                            <div class="invalid-feedback">
                                                Please Enter Name
                                            </div>      
                                        </div>
            
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter email" required>  
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>      
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>       
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirm" placeholder="Enter password confirm" required>
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>       
                                        </div>
                    
                                        <div class="mt-4 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div>
                                                <p>Already have an account ? <a href="<?php echo base_url('login') ?>" class="fw-medium text-primary"> Login</a> </p>
                                                <p>© 2021 Ulfa. Crafted with <i class="mdi mdi-heart text-danger"></i></p>
                                            </div>
                                        </div>
                
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">By registering you agree to the SPK <a href="#" class="text-primary">Terms of Use</a></p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>