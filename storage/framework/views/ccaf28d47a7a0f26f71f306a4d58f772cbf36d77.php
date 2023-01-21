<?php $__env->startSection('title',trans('Fund History')); ?>
<?php $__env->startSection('content'); ?>

<!-- Fund history -->
<section class="transaction-history mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo e(trans('Fund History')); ?></h2>
             </div>
          </div>
       </div>

       <form action="<?php echo e(route('user.fund-history.search')); ?>" method="get">
          <div class="row select-transaction">
             <div class="col-md-6 col-lg-4">
                <div class="input-group mb-4">
                   <div class="img">
                      <img src="<?php echo e(asset($themeTrue.'img/icon/edit.png')); ?>" alt="<?php echo app('translator')->get('edit img'); ?>" />
                   </div>
                   <input
                      type="text"
                      name="name"
                      value="<?php echo e(@request()->name); ?>"
                      class="form-control"
                      placeholder="<?php echo app('translator')->get('Type Here'); ?>"
                   />
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="input-group mb-4">
                   <div class="img">
                      <img src="<?php echo e(asset($themeTrue.'img/icon/chevron.png')); ?>" alt="<?php echo app('translator')->get('chevron img'); ?>" />
                   </div>
                   <select
                        name="status"
                        class="form-select"
                        id="salutation"
                        aria-label="Default select example"
                   >
                        <option value=""><?php echo app('translator')->get('All Payment'); ?></option>
                        <option value="1"
                                <?php if(@request()->status == '1'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Complete Payment'); ?></option>
                        <option value="2"
                                <?php if(@request()->status == '2'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Pending Payment'); ?></option>
                        <option value="3"
                                <?php if(@request()->status == '3'): ?> selected <?php endif; ?>><?php echo app('translator')->get('Cancel Payment'); ?></option>
                   </select>
                </div>
             </div>
             <div class="col-md-6 col-lg-3">
                <div class="input-group mb-4">
                    <div class="img">
                        <img src="<?php echo e(asset($themeTrue.'img/icon/chevron.png')); ?>" alt="<?php echo app('translator')->get('chevron img'); ?>" />
                    </div>
                    <input type="text" class="form-control" name="date_time"
                   id="datepicker" placeholder="<?php echo app('translator')->get('Select a date'); ?>" autocomplete="off" readonly/>
                </div>
             </div>
             <div class="col-md-6 col-lg-2">
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
                            <th scope="col"><?php echo app('translator')->get('Transaction ID'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Gateway'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Amount'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Charge'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Time'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $funds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($data->transaction); ?></td>
                                <td><?php echo app('translator')->get(optional($data->gateway)->name); ?></td>
                                <td><?php echo e(getAmount($data->amount)); ?> <?php echo app('translator')->get($basic->currency); ?></td>
                                <td><?php echo e(getAmount($data->charge)); ?> <?php echo app('translator')->get($basic->currency); ?></td>
                                <td>
                                    <?php if($data->status == 1): ?>
                                        <span class="badge bg-success"><?php echo app('translator')->get('Complete'); ?></span>
                                    <?php elseif($data->status == 2): ?>
                                        <span class="badge bg-warning"><?php echo app('translator')->get('Pending'); ?></span>
                                    <?php elseif($data->status == 3): ?>
                                        <span class="badge bg-danger"><?php echo app('translator')->get('Cancel'); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e(dateTime($data->created_at, 'd M Y h:i A')); ?></td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr class="text-center">
                                <td colspan="100%"><?php echo e(__('No Data Found!')); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>

                <?php echo e($funds->appends($_GET)->links($theme.'partials.pagination')); ?>


             </div>
          </div>
       </div>
    </div>
</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/user/transaction/fundHistory.blade.php ENDPATH**/ ?>