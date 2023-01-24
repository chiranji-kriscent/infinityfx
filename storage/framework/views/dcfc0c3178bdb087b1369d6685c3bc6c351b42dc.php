
<?php $__env->startSection('title',__($page_title)); ?>

<?php $__env->startSection('content'); ?>

<section class="transaction-history mt-5 pt-5">
    <div class="container-fluid">
       <div class="row">
          <div class="col">
             <div class="header-text-full">
                <h2><?php echo app('translator')->get($page_title); ?></h2>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col">
            <div class="card bg-dark">
                <div class="card-header d-flex flex-row justify-content-between align-items-center borderBottom">
                    <h4 class="card-title golden-text mb-3"><?php echo app('translator')->get($page_title); ?></h5>
                    <a href="<?php echo e(route('user.ticket.create')); ?>" class="gold-btn-sm"> <i class="fa fa-plus-circle"></i> <?php echo app('translator')->get('Create Ticket'); ?></a>
                </div>
                <div class="card-body">

                    <div class="table-parent table-responsive">
                        <table class="table table-striped mb-5">
                            <thead>
                                <tr>
                                    <th scope="col"><?php echo app('translator')->get('Subject'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Last Reply'); ?></th>
                                    <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bold"> [<?php echo e(trans('Ticket#').$ticket->ticket); ?>

                                            ] <?php echo e($ticket->subject); ?>

                                            </span>
                                        </td>
                                        <td>
                                            <?php if($ticket->status == 0): ?>
                                              <span class="badge rounded-pill bg-success"><?php echo app('translator')->get('Open'); ?></span>
                                            <?php elseif($ticket->status == 1): ?>
                                                <span class="badge rounded-pill bg-primary"><?php echo app('translator')->get('Answered'); ?></span>
                                            <?php elseif($ticket->status == 2): ?>
                                                <span class="badge rounded-pill bg-warning"><?php echo app('translator')->get('Replied'); ?></span>
                                            <?php elseif($ticket->status == 3): ?>
                                                <span class="badge rounded-pill bg-danger"><?php echo app('translator')->get('Closed'); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e(diffForHumans($ticket->last_reply)); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('user.ticket.view', $ticket->ticket)); ?>"
                                                class="btn btn-sm eye-btn" title="<?php echo app('translator')->get('Details'); ?>" >
                                                <i class="fa fa-eye"></i>
                                             </a>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="text-center">
                                        <td colspan="100%"><?php echo e(__('No Data Found!')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <?php echo e($tickets->appends($_GET)->links($theme.'partials.pagination')); ?>


                     </div>
                </div>
            </div>

          </div>
       </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/user/support/index.blade.php ENDPATH**/ ?>