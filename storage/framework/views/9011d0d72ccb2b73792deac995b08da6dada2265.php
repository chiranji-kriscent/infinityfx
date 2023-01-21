

<!DOCTYPE html>
<html lang="zxx" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site Properties -->
    <title>Infinity | Signin</title>
    <!-- Critical preload -->
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/js/vendors/uikit.min.js')); ?>" as="script">
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/css/vendors/uikit.min.css')); ?>" as="script">
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/css/style.css')); ?>" as="script">
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/fonts/fa-brands-400.woff2')); ?>" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/fonts/fa-solid-900.woff2')); ?>" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/fonts/lato-v16-latin-700.woff2')); ?>"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/fonts/lato-v16-latin-regular.woff2')); ?>"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo e(asset($themeTrue . 'public/home/assets/fonts/montserrat-v14-latin-600.woff2')); ?>"
        as="font" type="font/woff2" crossorigin>
    <link rel="shortcut icon" href="<?php echo e(asset($themeTrue . 'public/home/assets/favicon.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue . 'public/home/assets/css/vendors/uikit.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue . 'public/home/assets/css/style.css')); ?>">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                        style="background-image: url(<?php echo e(asset($themeTrue . 'public/home/assets/img/in-signin-image.jpg')); ?>);">
                    </div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- module logo begin -->
                                    <a class="uk-logo" href="<?php echo e(route('home')); ?>">
                                        <img class="in-offset-top-10"
                                            src="<?php echo e(asset($themeTrue . 'public/home/assets/img/in-lazy.svg')); ?>"
                                            data-src="<?php echo e(asset($themeTrue . 'public/home/assets/img/infinityfx.png')); ?>"
                                            alt="logo" data-uk-img>
                                    </a>
                                    <!-- module logo begin -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account
                                    </p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an
                                        account? <a href="<?php echo e(route('register')); ?> ">Register here</a></p>
                                    <!-- login form begin -->
                                    <form action="<?php echo e(route('login')); ?>" method="post" class="uk-grid uk-form">
                                        <?php echo csrf_field(); ?>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="username" value=""
                                                type="text" placeholder="Email or username">
                                        </div>
                                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="uk-text-danger float-left"><?php echo app('translator')->get($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="uk-text-danger float-left"><?php echo app('translator')->get($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input class="uk-input uk-border-rounded" name="password" value=""
                                                type="password" placeholder="Password">
                                        </div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="uk-text-danger"><?php echo app('translator')->get($message); ?></span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                            <label><input class="uk-checkbox uk-border-rounded"
                                                    <?php echo e(old('remember') ? 'checked' : ''); ?> name="remember"
                                                    type="checkbox">

                                                Remember me</label>
                                        </div>
                                        <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right"><a class="uk-link-reset" href="#">Forgot
                                                    password?</a></label>
                                        </div>


                                        <div class="uk-margin-small uk-width-1-1">
                                            <button
                                                class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                                type="submit" name="submit">Sign in</button>
                                        </div>
                                    </form>
                                    <!-- login form end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="<?php echo e(asset($themeTrue . 'public/home/assets/js/vendors/uikit.min.js')); ?> "></script>
    <script src="<?php echo e(asset($themeTrue . 'public/home/assets/js/vendors/indonez.min.js')); ?> "></script>
</body>
<?php echo e(asset($themeTrue . 'public/home/assets/')); ?>


</html>
<?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/auth/login.blade.php ENDPATH**/ ?>