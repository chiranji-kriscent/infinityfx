<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Dashboard'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-primary">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($userRecord['totalUser'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Total Users'); ?>
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-secondary">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($userRecord['activeUser'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Total Active Users'); ?>
                                </h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-success">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e($userRecord['todayJoin']); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Today Join User'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-danger">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($userRecord['totalUserBalance'], config('basic.fraction_number'))); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Total User Fund'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-wallet"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right white bg-warning">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($userRecord['totalInterestBalance'], config('basic.fraction_number'))); ?> </h2>
                                </div>
                                <h6 class="text-dark font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Total Interest Fund'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-dark"><i class="fas fa-money-bill"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-info">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e($totalPlan); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Total Plans"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-clipboard-list"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e($investment['total']); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Total Investment"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-seedling"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right bg-light">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-info mb-1 font-weight-medium"><?php echo e($investment['running']); ?></h2>
                                </div>
                                <h6 class="text-dark font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Running Investment"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-dark"><i class="fab fa-pagelines"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-secondary">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e($investment['complete']); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Complete Investment"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-calendar-check"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-success">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e($investment['todayInvest']); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Today Invest'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-inbox"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-danger">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($investment['todayInvestmentAmount'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Today's Invested"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-coins"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="card shadow border-right text-white bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($investment['monthlyInvestmentAmount'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("This Month Invest"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-coins"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right text-white bg-secondary">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($investment['totalInvestAmount'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Total Invest"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-money-bill"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right text-white bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($funding['todayDeposit'],config('basic.fraction_number'))); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Today's Deposit"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-hand-holding-usd"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right text-white bg-info">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($funding['totalAmountReceived'],config('basic.fraction_number'))); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Total Deposit"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-hand-holding-usd"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-warning">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($funding['totalChargeReceived'],config('basic.fraction_number'))); ?></h2>
                                </div>
                                <h6 class="text-dark font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Deposited Charge"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-dark"><i class="fa fa-hand-holding-usd"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title"><?php echo app('translator')->get("This Month's Summary"); ?></h4>
                                <div>
                                    <canvas id="line-chart" height="150"></canvas>
                                </div>
                            </div>

                            <div class="col-md-4">

                                <h4 class="card-title"><?php echo app('translator')->get('Plan Sale Statistics'); ?></h4>
                                <div>
                                    <canvas id="pie-chart" height="280"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        <div class="row">
            <div class="col-md-12">
                <h4 class="card-title"><?php echo app('translator')->get('Payout Statistics'); ?></h4>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($payout['pending'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Pending Request'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-circle-notch"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-light">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-muted mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($payout['todayPayoutAmount'])); ?></h2>
                                </div>
                                <h6 class="text-dark font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get("Today's Payout"); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-dark"><i class="fas fa-hand-holding-usd"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-secondary">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($payout['monthlyPayoutAmount'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('This Month Payout'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-money-bill-wave"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-success">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($payout['monthlyPayoutCharge'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('This Month Charge'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fas fa-receipt"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h4 class="card-title"><?php echo app('translator')->get('Tickets'); ?></h4>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-info">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($tickets['closed'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Closed Ticket'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-times-circle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-danger">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($tickets['replied'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Replied Ticket'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-inbox"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-warning">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($tickets['answered'])); ?></h2>
                                </div>
                                <h6 class="text-dark font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Answered Ticket'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-dark"><i class="fa fa-check"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow border-right bg-dark">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-light mb-1 font-weight-medium"><?php echo e(number_format($tickets['pending'])); ?></h2>
                                </div>
                                <h6 class="text-light font-weight-normal mb-0 w-100 text-truncate"><?php echo app('translator')->get('Pending Ticket'); ?></h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-light"><i class="fa fa-spinner"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if(adminAccessRoute(config('role.user_management.access.view'))): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo app('translator')->get('Latest User'); ?></h4>
                            <div class="table-responsive">
                                <table class="categories-show-table table table-hover table-striped table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                                        <th scope="col"><?php echo app('translator')->get('Email'); ?></th>
                                        <th scope="col"><?php echo app('translator')->get('Balance'); ?></th>
                                        <th scope="col"><?php echo app('translator')->get('Interest Balance'); ?></th>
                                        <th scope="col"><?php echo app('translator')->get('Status'); ?></th>
                                        <?php if(adminAccessRoute(config('role.user_management.access.edit'))): ?>
                                            <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $latestUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td data-label="<?php echo app('translator')->get('Name'); ?>">
                                                <a href="<?php echo e(route('admin.user-edit',[$user->id])); ?>" target="_blank">
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="mr-3"><img src="<?php echo e(getFile(config('location.user.path').$user->image)); ?>" alt="user" class="rounded-circle" width="45" height="45"></div>
                                                        <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium"><?php echo app('translator')->get($user->firstname); ?> <?php echo app('translator')->get($user->lastname); ?></h5>
                                                                <span class="text-muted font-14"><span>@</span><?php echo app('translator')->get($user->username); ?></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td data-label="<?php echo app('translator')->get('Email'); ?>"><?php echo app('translator')->get($user->email); ?></td>
                                            <td data-label="<?php echo app('translator')->get('Balance'); ?>"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($user->balance, config('basic.fraction_number'))); ?></td>
                                            <td data-label="<?php echo app('translator')->get('Interest Balance'); ?>"><?php echo e(trans($basic->currency_symbol)); ?><?php echo e(getAmount($user->interest_balance, config('basic.fraction_number'))); ?></td>
                                            <td data-label="<?php echo app('translator')->get('Status'); ?>">
                                            <span
                                                class="badge badge-pill <?php echo e($user->status == 0 ? 'badge-danger' : 'badge-success'); ?>"><?php echo e($user->status == 0 ? 'Inactive' : 'Active'); ?></span>
                                            </td>
                                            <?php if(adminAccessRoute(config('role.user_management.access.edit'))): ?>
                                                <td data-label="<?php echo app('translator')->get('Action'); ?>">
                                                    <div class="dropdown show">
                                                        <a class="dropdown-toggle p-3" href="#" id="dropdownMenuLink"
                                                           data-toggle="dropdown"
                                                           aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item"
                                                               href="<?php echo e(route('admin.user-edit',$user->id)); ?>">
                                                                <i class="fa fa-edit text-warning pr-2"
                                                                   aria-hidden="true"></i> <?php echo app('translator')->get('Edit'); ?>
                                                            </a>

                                                            <a class="dropdown-item"
                                                               href="<?php echo e(route('admin.send-email',$user->id)); ?>">
                                                                <i class="fa fa-envelope text-success pr-2"
                                                                   aria-hidden="true"></i> <?php echo app('translator')->get('Send Email'); ?>
                                                            </a>
                                                            <a class="dropdown-item loginAccount" type="button"
                                                                data-toggle="modal"
                                                                data-target="#signIn"
                                                                data-route="<?php echo e(route('admin.login-as-user',$user->id)); ?>">
                                                                <i class="fas fa-sign-in-alt text-success pr-2"
                                                                aria-hidden="true"></i> <?php echo app('translator')->get('Login as User'); ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td class="text-center text-danger" colspan="7"><?php echo app('translator')->get('No User Data'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- Admin Login as a User Modal -->
    <div class="modal fade" id="signIn">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="" class="loginAccountAction" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- Modal Header -->
                    <div class="modal-header modal-colored-header bg-primary">
                        <h4 class="modal-title"><?php echo app('translator')->get('Sing In Confirmation'); ?></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <p><?php echo app('translator')->get('Are you sure to sign in this account?'); ?></p>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><span><?php echo app('translator')->get('Close'); ?></span>
                        </button>
                        <button type="submit" class=" btn btn-primary "><span><?php echo app('translator')->get('Yes'); ?></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/admin/js/Chart.min.js')); ?>"></script>

    <script>
        "use strict";
        new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: <?php echo json_encode($statistics['schedule']->keys(), 15, 512) ?>,
                datasets: [{
                    data: <?php echo json_encode($statistics['investment']->values(), 15, 512) ?>,
                    label: "Investments",
                    borderColor: "#6fbbff",
                    fill: false
                }, {
                    data: <?php echo json_encode($statistics['deposit']->values(), 15, 512) ?>,
                    label: "Deposits",
                    borderColor: "#ff6f62",
                    fill: false
                }, {
                    data: <?php echo json_encode($statistics['gaveProfit']->values(), 15, 512) ?>,
                    label: "Return Profit",
                    borderColor: "#98df8a",
                    fill: false
                }, {
                    data: <?php echo json_encode($statistics['payout']->values(), 15, 512) ?>,
                    label: "Payout",
                    borderColor: "#8b6ef3",
                    fill: false
                }
                ]
            }
        });


        new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($pieLog->pluck('level'), 15, 512) ?>,
                datasets: [{
                    backgroundColor: ["#6fbbff", "#ff6f62", "#05ffe4", "#98df8a", "#8b6ef3", "#f9dd7e", "#f34da3"],
                    data:  <?php echo json_encode($pieLog->pluck('value'), 15, 512) ?>,
                }]
            },
            options: {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItems, data) {
                            return data.labels[tooltipItems.index] + ': ' + data.datasets[0].data[tooltipItems.index] + '%';
                        }
                    }

                }
            }
        });


        $(document).on('click', '#details', function () {
            var title = $(this).data('servicetitle');
            var description = $(this).data('description');
            $('#title').text(title);
            $('#servicedescription').text(description);
        });

        $(document).ready(function () {
            let isActiveCronNotification = '<?php echo e($basic->is_active_cron_notification); ?>';
            if (isActiveCronNotification == 1)
                $('#cron-info').modal('show');
            $(document).on('click', '.copy-btn', function () {
                var _this = $(this)[0];
                var copyText = $(this).parents('.input-group-append').siblings('input');
                $(copyText).prop('disabled', false);
                copyText.select();
                document.execCommand("copy");
                $(copyText).prop('disabled', true);
                $(this).text('Coppied');
                setTimeout(function () {
                    $(_this).text('');
                    $(_this).html('<i class="fas fa-copy"></i>');
                }, 500)
            });


            $(document).on('click', '.loginAccount', function () {
                var route = $(this).data('route');
                $('.loginAccountAction').attr('action', route)
            });
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>