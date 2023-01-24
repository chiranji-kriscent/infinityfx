<?php $__env->startSection('title',trans('Invest History')); ?>
<?php $__env->startSection('content'); ?>
    <script>
        "use strict"
        function getCountDown(elementId, seconds) {
            var times = seconds;
            var x = setInterval(function () {
                var distance = times * 1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML = days + "d: " + hours + "h " + minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "COMPLETE";
                }
                times--;
            }, 1000);
        }
    </script>

    <!-- Invest history -->
    <section class="transaction-history mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-text-full">
                        <h2><?php echo e(trans('Invest History')); ?></h2>
                    </div>
                </div>
                <div class="col-2">
                    <a href="<?php echo e(route('user.addFund')); ?> " class="btn btn-success">Add Fund</a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="table-parent table-responsive">
                        <table class="table table-striped mb-5">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo app('translator')->get('SL'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Plan'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Return Interest'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Received Amount'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Upcoming Payment'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $investments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $invest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e(loopIndex($investments) + $key); ?></td>
                                    <td>
                                        <?php echo e(trans(optional($invest->plan)->name)); ?>

                                        <br> <?php echo e(getAmount($invest->amount).' '.trans($basic->currency)); ?>

                                    </td>
                                    <td>
                                        <?php echo e(getAmount($invest->profit)); ?> <?php echo e(trans($basic->currency)); ?>

                                        <?php echo e(($invest->period == '-1') ? trans('For Lifetime') : 'per '. trans($invest->point_in_text)); ?>

                                        <br>
                                        <?php echo e(($invest->capital_status == '1') ? '+ '.trans('Capital') :''); ?>

                                    </td>
                                    <td>
                                        <?php echo e($invest->recurring_time); ?> x <?php echo e($invest->profit); ?> =  <?php echo e(getAmount($invest->recurring_time*$invest->profit)); ?> <?php echo e(trans($basic->currency)); ?>

                                    </td>
                                    <td>
                                        <?php if($invest->status == 1): ?>
                                            <p id="counter<?php echo e($invest->id); ?>" class="mb-2"></p>
                                            <script>getCountDown("counter<?php echo e($invest->id); ?>", <?php echo e(\Carbon\Carbon::parse($invest->afterward)->diffInSeconds()); ?>);</script>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"  style="width: <?php echo e($invest->nextPayment); ?>"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo e($invest->nextPayment); ?></div>
                                            </div>
                                        <?php else: ?>
                                            <span class="badge badge-success"><?php echo app('translator')->get('Completed'); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="100%"><?php echo e(trans('No Data Found!')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/user/transaction/investLog.blade.php ENDPATH**/ ?>