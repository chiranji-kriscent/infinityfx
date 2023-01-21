<?php $__env->startSection('title',__($page_title)); ?>

<?php $__env->startSection('content'); ?>

<!-- Fund history -->
<section class="transaction-history profile-setting mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo e(trans($page_title)); ?></h2>
             </div>
          </div>
       </div>

        <div class="edit-area">
            <form class="form-row" action="" method="post">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <label for="email" class="golden-text"><?php echo app('translator')->get('Receiver Email Address'); ?></label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo app('translator')->get('Receiver Email Address'); ?>"
                        />
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="amount" class="golden-text"><?php echo app('translator')->get('Amount'); ?></label>
                        <input
                            type="text"
                            id="amount"
                            class="form-control"
                            name="amount" value="<?php echo e(old('amount')); ?>" placeholder="<?php echo app('translator')->get('Enter Amount'); ?>"  onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                        />
                        <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="" class="golden-text"
                            ><?php echo app('translator')->get('Select Wallet'); ?></label
                        >
                        <select
                            class="form-select"
                            name="wallet_type" id="wallet_type"
                            aria-label="Default select example"
                        >
                            <option value="" selected disabled class="text-white bg-dark"><?php echo e(trans('Select Wallet')); ?></option>
                            <option value="balance" class="text-white bg-dark"><?php echo e(trans('Main balance')); ?></option>
                            <option value="interest_balance" class="text-white bg-dark"><?php echo e(trans('Interest Balance')); ?></option>
                        </select>
                        <?php $__errorArgs = ['wallet_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="col-md-12 mb-4">
                        <label for="password" class="golden-text"><?php echo app('translator')->get('Enter Password'); ?></label>
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password" value="<?php echo e(old('password')); ?>" placeholder="<?php echo app('translator')->get('Your Password'); ?>"
                        />
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                </div>
                <button type="submit" class="gold-btn"><?php echo app('translator')->get('Submit'); ?></button>
            </form>
        </div>

    </div>
 </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/user/money-transfer.blade.php ENDPATH**/ ?>