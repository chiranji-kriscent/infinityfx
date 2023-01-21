<div id="sidebar">
    <a class="navbar-brand golden-text" href="<?php echo e(route('home')); ?>"><?php echo e(config('basic.site_title')); ?></a>
    <ul class="pb-4">
       <!-- list item -->
       <li class="<?php echo e(menuActive('user.home')); ?>">
          <a href="<?php echo e(route('user.home')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/layout.png')); ?>" alt="<?php echo app('translator')->get('Dashboard'); ?>"/><?php echo app('translator')->get('Dashboard'); ?>
          </a>
       </li>
        <li class="<?php echo e(menuActive(['user.invest-history'])); ?>">
          <a href="<?php echo e(route('user.invest-history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/growth-graph.png')); ?>" alt="<?php echo app('translator')->get('invest history'); ?>"/><?php echo app('translator')->get('invest history'); ?>
          </a>
        </li>
       <li class="<?php echo e(menuActive(['user.addFund', 'user.addFund.confirm'])); ?>">
          <a href="<?php echo e(route('user.addFund')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/money-bag.png')); ?>" alt="<?php echo app('translator')->get('Add Fund'); ?>"/><?php echo app('translator')->get('Add Fund'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.fund-history', 'user.fund-history.search'])); ?>">
          <a href="<?php echo e(route('user.fund-history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/fund.png')); ?>" alt="<?php echo app('translator')->get('Fund History'); ?>"/><?php echo app('translator')->get('Fund History'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.money-transfer'])); ?>">
          <a href="<?php echo e(route('user.money-transfer')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/money-transfer.png')); ?>" alt="<?php echo app('translator')->get('transfer'); ?>"/><?php echo app('translator')->get('transfer'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.transaction', 'user.transaction.search'])); ?>">
          <a href="<?php echo e(route('user.transaction')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/transaction.png')); ?>" alt="<?php echo app('translator')->get('transaction'); ?>"/><?php echo app('translator')->get('transaction'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
          <a href="<?php echo e(route('user.payout.money')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/payout.png')); ?>" alt="<?php echo app('translator')->get('payout'); ?>"/><?php echo app('translator')->get('payout'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.payout.history','user.payout.history.search'])); ?>">
          <a href="<?php echo e(route('user.payout.history')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/pay-history.png')); ?>" alt="<?php echo app('translator')->get('payout history'); ?>"/><?php echo app('translator')->get('payout history'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.referral'])); ?>">
          <a href="<?php echo e(route('user.referral')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/refferal.png')); ?>" alt="<?php echo app('translator')->get('my referral'); ?>"/><?php echo app('translator')->get('my referral'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.referral.bonus', 'user.referral.bonus.search'])); ?>">
          <a href="<?php echo e(route('user.referral.bonus')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/bonus.png')); ?>" alt="<?php echo app('translator')->get('referral bonus'); ?>"/><?php echo app('translator')->get('referral bonus'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.profile'])); ?>">
          <a href="<?php echo e(route('user.profile')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/setting.png')); ?>" alt="<?php echo app('translator')->get('profile settings'); ?>"/><?php echo app('translator')->get('profile settings'); ?>
          </a>
       </li>
       <li class="<?php echo e(menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])); ?>">
          <a href="<?php echo e(route('user.ticket.list')); ?>" class="sidebar-link">
             <img src="<?php echo e(asset($themeTrue.'img/icon/support.png')); ?>" alt="<?php echo app('translator')->get('support ticket'); ?>"/><?php echo app('translator')->get('support ticket'); ?>
          </a>
       </li>
    </ul>
 </div>
<?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/partials/sidebar.blade.php ENDPATH**/ ?>