<?php $__env->startSection('title',$page_title); ?>

<?php $__env->startSection('content'); ?>
<section class="login-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="login-box">
                <form action="<?php echo e(route('user.mailVerify')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box mb-4">
                                <h4 class="golden-text"><?php echo app('translator')->get('Enter Your Code'); ?></h4>
                                <div class="input-group">
                                    <div class="img">
                                        <img src="<?php echo e(asset($themeTrue.'img/icon/padlock.png')); ?>" alt="<?php echo app('translator')->get('email img'); ?>" />
                                    </div>
                                    <input
                                        type="text"
                                        name="code"
                                        class="form-control"
                                        value="<?php echo e(old('code')); ?>"
                                        placeholder="<?php echo app('translator')->get('Enter Your Code'); ?>"
                                        autocomplete="off"
                                    />
                                </div>
                                <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo e(trans($message)); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo e(trans($message)); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="gold-btn-block" type="submit"><?php echo app('translator')->get('Submit'); ?></button>
                        </div>
                        <div class="col-lg-12 text-center mt-2">
                            <p class="text-center"><?php echo app('translator')->get('Didn\'t get Code? Click to'); ?> <a href="<?php echo e(route('user.resendCode')); ?>?type=email"  class="golden-text"> <?php echo app('translator')->get('Resend code'); ?></a></p>

                            <?php $__errorArgs = ['resend'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-danger mt-1"><?php echo e(trans($message)); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/auth/verification/email.blade.php ENDPATH**/ ?>