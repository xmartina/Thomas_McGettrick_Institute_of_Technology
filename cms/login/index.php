<?php
session_start();
$rootDir = '/home/multistream6/domains/thomas.matagram.com/public_html/cms/';
$siteUrl = 'https://thomas.matagram.com/cms/';
include_once ($rootDir.'functions/login_function.php');
include_once ($rootDir.'partials/header.php');
?>
    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="<?=$siteUrl?>front_added/logo/logo.png?v=1697959738" alt="">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="index.html" class="mb-40 max-w-290-px">
                        <img src="<?=$siteUrl?>/front_added/logo/logo.png?v=1697959738" alt="">
                    </a>
                    <h4 class="mb-12">Sign In to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
                </div>
                <form action="login.php" method="POST"> <!-- Updated action to point to login.php -->
                    <div class="icon-field mb-16">
                    <span class="icon top-50 translate-middle-y">
                        <iconify-icon icon="mage:email"></iconify-icon>
                    </span>
                        <input type="email" name="email" class="form-control h-56-px bg-neutral-50 radius-12" placeholder="Email" required>
                    </div>
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                        </span>
                            <input type="password" name="password" class="form-control h-56-px bg-neutral-50 radius-12" id="your-password" placeholder="Password" required>
                        </div>
                        <span class="toggle-password ri-eye-line cursor-pointer position-absolute end-0 top-50 translate-middle-y me-16 text-secondary-light" data-toggle="#your-password"></span>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox" value="" id="remember">
                                <label class="form-check-label" for="remember">Remember me </label>
                            </div>
                            <a href="javascript:void(0)" class="text-primary-600 fw-medium">Forgot Password?</a>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32" name="login"> Sign In</button>

                    <!-- Additional social login buttons -->

                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">Don’t have an account? <a href="<?=$siteUrl?>signup" class="text-primary-600 fw-semibold">Sign Up</a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>

<?php
include_once ($rootDir.'partials/footer.php');
?>