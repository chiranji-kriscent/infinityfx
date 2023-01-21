<?php $__env->startSection('title',trans($title)); ?>
<?php $__env->startSection('content'); ?>

<section class="transaction-history mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo e(trans($title)); ?></h2>
             </div>
          </div>
       </div>

       <form action="<?php echo e(route('user.referral.bonus.search')); ?>" method="get">
          <div class="row select-transaction">
             <div class="col-md-6 col-lg-4">
                <div class="input-group mb-4">
                   <div class="img">
                      <img src="<?php echo e(asset($themeTrue.'img/icon/edit.png')); ?>" alt="<?php echo app('translator')->get('edit img'); ?>" />
                   </div>
                   <input
                      type="text"
                      name="search_user"
                      value="<?php echo e(@request()->search_user); ?>"
                      class="form-control"
                      placeholder="<?php echo app('translator')->get('Search User'); ?>"
                   />
                </div>
             </div>
             <div class="col-md-6 col-lg-4">
                <div class="input-group mb-4">
                   <div class="img">
                      <img src="<?php echo e(asset($themeTrue.'img/icon/chevron.png')); ?>" alt="<?php echo app('translator')->get('chevron img'); ?>" />
                   </div>
                   <input type="text" class="form-control" name="datetrx" id="datepicker" placeholder="<?php echo app('translator')->get('Select a date'); ?>" autocomplete="off" readonly/>
                </div>
             </div>
             <div class="col-md-6 col-lg-4">
                <button type="submit" class="gold-btn search-btn mb-4">
                    <?php echo app('translator')->get('Search'); ?>
                </button>
             </div>
          </div>
       </form>

       <div class="row">
          <div class="col">
             <div class="table-parent table-responsive">
                <table class="table table-striped mb-5">
                    <thead>
                        <tr>
                            <th><?php echo app('translator')->get('SL No.'); ?></th>
                            <th><?php echo app('translator')->get('Bonus From'); ?></th>
                            <th><?php echo app('translator')->get('Amount'); ?></th>
                            <th><?php echo app('translator')->get('Remarks'); ?></th>
                            <th><?php echo app('translator')->get('Time'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e(loopIndex($transactions) + $loop->index); ?></td>
                                <td><?php echo app('translator')->get(optional($transaction->bonusBy)->fullname); ?></td>
                                <td>
                                    <span class="font-weight-bold text-success"><?php echo e(getAmount($transaction->amount, config('basic.fraction_number')). ' ' . trans(config('basic.currency'))); ?></span>
                                </td>
                                <td><?php echo e(getAmount($data->charge)); ?> <?php echo app('translator')->get($basic->currency); ?></td>
                                <td><?php echo app('translator')->get($transaction->remarks); ?></td>
                                <td><?php echo e(dateTime($transaction->created_at, 'd M Y h:i A')); ?></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr class="text-center">
                                <td colspan="100%"><?php echo e(__('No Data Found!')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                <?php echo e($transactions->appends($_GET)->links($theme.'partials.pagination')); ?>


             </div>
          </div>
       </div>
    </div>
 </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/user/transaction/referral-bonus.blade.php ENDPATH**/ ?>