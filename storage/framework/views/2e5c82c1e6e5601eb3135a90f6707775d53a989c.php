
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Add Fund'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- add fund -->
<section class="payment-gateway mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo app('translator')->get('Add Fund'); ?></h2>
             </div>
          </div>
       </div>

       <div class="row">
            <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="gateway-box">
                        <img
                            class="img-fluid gateway"
                            src="<?php echo e(getFile(config('location.gateway.path').$gateway->image)); ?>"
                            alt="<?php echo e($gateway->name); ?>"
                        >
                        <button type="button"
                            data-id="<?php echo e($gateway->id); ?>"
                            data-name="<?php echo e($gateway->name); ?>"
                            data-currency="<?php echo e($gateway->currency); ?>"
                            data-gateway="<?php echo e($gateway->code); ?>"
                            data-min_amount="<?php echo e(getAmount($gateway->min_amount, $basic->fraction_number)); ?>"
                            data-max_amount="<?php echo e(getAmount($gateway->max_amount,$basic->fraction_number)); ?>"
                            data-percent_charge="<?php echo e(getAmount($gateway->percentage_charge,$basic->fraction_number)); ?>"
                            data-fix_charge="<?php echo e(getAmount($gateway->fixed_charge, $basic->fraction_number)); ?>"
                            class="gold-btn addFund"
                            data-bs-toggle="modal" data-bs-target="#addFundModal"><?php echo app('translator')->get('Pay Now'); ?>
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

                    <div class="modal-body ">
                        <div class="payment-form ">
                            <?php if(0 == $totalPayment): ?>
                                <p class="golden-text depositLimit lebelFont"></p>
                                <p class="golden-text depositCharge lebelFont"></p>
                            <?php endif; ?>

                            <input type="hidden" class="gateway" name="gateway" value="">


                            <div class="form-group mb-30 mt-3">
                                <div class="box">
                                    <h5 class="text-white"><?php echo app('translator')->get('Amount'); ?></h5>
                                    <div class="input-group">
                                        <input
                                            type="text" class="amount form-control" name="amount"
                                            <?php if($totalPayment != null): ?> value="<?php echo e($totalPayment); ?>" readonly <?php endif; ?>
                                        />
                                        <button class="gold-btn show-currency"></button>
                                    </div>
                                </div>
                                <pre class="text-danger errors"></pre>
                            </div>
                        </div>

                        <div class="payment-info text-center">
                            <img id="loading" src="<?php echo e(asset('assets/admin/images/loading.gif')); ?>" alt="<?php echo app('translator')->get('loader'); ?>" class="w-15"/>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="button" class="btn gold-btn checkCalc"><?php echo app('translator')->get('Next'); ?></button>
                    </div>

                </div>
            </div>
        </div>
    <?php $__env->stopPush(); ?>


<?php $__env->stopSection(); ?>



<?php $__env->startPush('script'); ?>

    <script>
        $('#loading').hide();
        "use strict";
        var id, minAmount, maxAmount, baseSymbol, fixCharge, percentCharge, currency, amount, gateway;
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

            $('.method-name').text(`<?php echo app('translator')->get('Payment By'); ?> ${$(this).data('name')} - ${currency}`);
            $('.show-currency').text("<?php echo e(config('basic.currency')); ?>");
            $('.gateway').val(currency);

            // amount
        });


        $(".checkCalc").on('click', function () {
            $('.payment-form').addClass('d-none');

            $('#loading').show();
            $('.modal-backdrop.fade').addClass('show');
            amount = $('.amount').val();
            $.ajax({
                url: "<?php echo e(route('user.addFund.request')); ?>",
                type: 'POST',
                data: {
                    amount,
                    gateway
                },
                success(data) {

                    $('.payment-form').addClass('d-none');
                    $('.checkCalc').closest('.modal-footer').addClass('d-none');

                    var htmlData = `
                     <ul class="list-group text-center">
                        <li class="list-group-item bg-transparent list-text customborder">
                            <img src="${data.gateway_image}"
                                style="max-width:100px; max-height:100px; margin:0 auto;"/>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            <?php echo app('translator')->get('Amount'); ?>:
                            <strong>${data.amount} </strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder"><?php echo app('translator')->get('Charge'); ?>:
                                <strong>${data.charge}</strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            <?php echo app('translator')->get('Payable'); ?>: <strong> ${data.payable}</strong>
                        </li>
                        <li class="list-group-item bg-transparent text-white list-text customborder">
                            <?php echo app('translator')->get('Conversion Rate'); ?>: <strong>${data.conversion_rate}</strong>
                        </li>
                        <li class="list-group-item bg-transparent list-text customborder">
                            <strong>${data.in}</strong>
                        </li>

                        ${(data.isCrypto == true) ? `
                        <li class="list-group-item bg-transparent list-text customborder">
                            ${data.conversion_with}
                        </li>
                        ` : ``}

                        <li class="list-group-item bg-transparent">
                        <a href="${data.payment_url}" class="btn gold-btn addFund"><?php echo app('translator')->get('Pay Now'); ?></a>
                        </li>
                        </ul>`;

                    $('.payment-info').html(htmlData)
                },
                complete: function () {
                    $('#loading').hide();
                },
                error(err) {
                    var errors = err.responseJSON;
                    for (var obj in errors) {
                        $('.errors').text(`${errors[obj]}`)
                    }

                    $('.payment-form').removeClass('d-none');
                }
            });
        });


        $('.close').on('click', function (e) {
            $('#loading').hide();
            $('.payment-form').removeClass('d-none');
            $('.checkCalc').closest('.modal-footer').removeClass('d-none');
            $('.payment-info').html(``)
            $('.amount').val(``);
            $("#addFundModal").modal("hide");
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/user/addFund.blade.php ENDPATH**/ ?>