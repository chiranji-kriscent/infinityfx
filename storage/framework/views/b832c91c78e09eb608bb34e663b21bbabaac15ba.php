<?php $__env->startSection('title', trans($title)); ?>

<?php $__env->startSection('content'); ?>

<!-- investment plans -->
<section class="payment-gateway mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo app('translator')->get($title); ?></h2>
             </div>
          </div>
       </div>

       <div class="row">
            <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img
                            class="img-fluid gateway"
                            src="<?php echo e(getFile(config('location.withdraw.path').$gateway->image)); ?>"
                            alt="<?php echo e($gateway->name); ?>"
                        >
                        <button type="button"
                            data-id="<?php echo e($gateway->id); ?>"
                            data-name="<?php echo e($gateway->name); ?>"
                            data-min_amount="<?php echo e(getAmount($gateway->minimum_amount, $basic->fraction_number)); ?>"
                            data-max_amount="<?php echo e(getAmount($gateway->maximum_amount,$basic->fraction_number)); ?>"
                            data-percent_charge="<?php echo e(getAmount($gateway->percent_charge,$basic->fraction_number)); ?>"
                            data-fix_charge="<?php echo e(getAmount($gateway->fixed_charge, $basic->fraction_number)); ?>"
                            class="gold-btn addFund"
                            data-bs-toggle="modal" data-bs-target="#addFundModal"><?php echo app('translator')->get('PAYOUT NOW'); ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </div>
    </div>
</section>


    <?php $__env->startPush('loadModal'); ?>
        <div id="addFundModal" class="modal fade addFundModal" tabindex="-1" role="dialog" data-bs-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content form-block">
                    <div class="modal-header">
                        <h4 class="modal-title method-name golden-text"></h4>
                        <button
                            type="button"
                            data-bs-dismiss="modal"
                            class="btn-close"
                            aria-label="Close"
                        >
                            <img src="<?php echo e(asset($themeTrue.'img/icon/cross.png')); ?>" alt="<?php echo app('translator')->get('modal dismiss'); ?>" />
                        </button>
                    </div>

                    <form action="<?php echo e(route('user.payout.moneyRequest')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                    <div class="modal-body">
                        <div class="payment-form ">
                            <p class="depositLimit"></p>
                            <p class="depositCharge"></p>

                            <div class="form-group my-3">
                                <h5 class="mb-2 golden-text d-block modal_text_level"><?php echo app('translator')->get('Select wallet'); ?></h5>
                                <select class="form-control" name="wallet_type">
                                    <option
                                        value="balance" class="bg-dark text-white"><?php echo app('translator')->get('Deposit Balance - '.$basic->currency_symbol.getAmount(auth()->user()->balance)); ?></option>
                                    <option value="interest_balance" class="bg-dark text-white"><?php echo app('translator')->get('Interest Balance -'.$basic->currency_symbol.getAmount(auth()->user()->interest_balance)); ?></option>
                                </select>
                            </div>

                            <input type="hidden" class="gateway" name="gateway" value="">

                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <h5 class="golden-text"><?php echo app('translator')->get('Amount'); ?></h5>
                                    <div class="input-group">
                                        <input
                                            type="text" class="amount form-control" name="amount"
                                        />
                                        <button class="gold-btn show-currency"></button>
                                    </div>
                                </div>
                                <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-danger"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="submit" class="btn gold-btn "><?php echo app('translator')->get('Next'); ?></button>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    <?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>

    <?php if(count($errors) > 0 ): ?>
        <script>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Notiflix.Notify.Failure("<?php echo app('translator')->get($error); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>

    <script>
        "use strict";
        var id, minAmount, maxAmount, baseSymbol, fixCharge, percentCharge, currency, gateway;

        $('.addFund').on('click', function () {
            id = $(this).data('id');
            gateway = $(this).data('gateway');
            minAmount = $(this).data('min_amount');
            maxAmount = $(this).data('max_amount');
            baseSymbol = "<?php echo e(config('basic.currency_symbol')); ?>";
            fixCharge = $(this).data('fix_charge');
            percentCharge = $(this).data('percent_charge');
            currency = $(this).data('currency');
            $('.depositLimit').text(`<?php echo app('translator')->get('Transaction Limit:'); ?> ${minAmount} - ${maxAmount}  ${baseSymbol}`);

            var depositCharge = `<?php echo app('translator')->get('Charge:'); ?> ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' + percentCharge + ' % ' : ''}`;
            $('.depositCharge').text(depositCharge);
            $('.method-name').text(`<?php echo app('translator')->get('Payout By'); ?> ${$(this).data('name')}`);
            $('.show-currency').text("<?php echo e(config('basic.currency')); ?>");
            $('.gateway').val(id);
        });
        $('.close').on('click', function (e) {
            $('#loading').hide();
            $('.amount').val(``);
            $("#addFundModal").modal("hide");
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/user/payout/money.blade.php ENDPATH**/ ?>