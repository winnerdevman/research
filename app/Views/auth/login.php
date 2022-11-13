<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">

    <!-- Login form -->
    <form class="login-form form-validate-jquery" action="#" method="post" novalidate="novalidate">
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                        <img src="<?php echo base_url("assets/images/your-review-icon-4.png");?>" class="h-48px" alt="">
                    </div>
                    <h5 class="mb-0">Login to your account</h5>
                    <span class="d-block text-muted">Enter your credentials below</span>
                </div>
                <div class="mb-13 hide" id="login_failed_box">
                    <div class="alert alert-danger alert-dismissible fade show">
                        <i class="ph-x-circle me-2"></i>
                        <span class="fw-semibold">Credential Error!</span> Check your username and password, again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" name="username" id="username" required placeholder="john@doe.com">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user-circle text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="form-control-feedback form-control-feedback-start">
                        <input type="text" class="form-control" name="userpasswd" id="userpasswd" required placeholder="•••••••••••">
                        <div class="form-control-feedback-icon">
                            <i class="ph-lock text-muted"></i>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </div>

                <div class="text-center">
                    <a href="<?php echo base_url("auth/login_password_recover");?>">Forgot password?</a>
                </div>
            </div>
        </div>
    </form>
    <!-- /login form -->

</div>
<!-- /content area -->