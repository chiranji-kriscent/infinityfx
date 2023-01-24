<div id="sidebar">
    <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e(config('basic.site_title')); ?></a>
    <ul class="pb-4 pt-3" style="background: rgb(224, 221, 221)">
       <!-- list item -->
       

       <li class="<?php echo e(menuActive('user.home')); ?>">
        <a href="<?php echo e(route('user.home')); ?>" class="sidebar-link">
          <i style="color: #802A9E;font-size:1.5rem" class="fas fa-th-large"></i>&nbsp; <?php echo app('translator')->get('Dashboard'); ?>
        </a>
     </li>
     <li class="<?php echo e(menuActive(['user.invest-history'])); ?>">
        <a href="<?php echo e(route('user.invest-history')); ?>" class="sidebar-link">
           <img src="<?php echo e(asset($themeTrue.'img/icon/growth-graph.png')); ?>" alt="<?php echo app('translator')->get('invest history'); ?>"/><?php echo app('translator')->get('invest'); ?>
        </a>
      </li>
      <li class="<?php echo e(menuActive(['user.money-transfer'])); ?>">
        <a href="<?php echo e(route('user.money-transfer')); ?>" class="sidebar-link">
            <i style="color: #802A9E;font-size:1.5rem" class="fas fa-wallet"></i>&nbsp; <?php echo app('translator')->get('wallet'); ?>
        </a>
     </li>
     <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
        <a href="<?php echo e(route('user.payout.money')); ?>" class="sidebar-link">
           <img src="<?php echo e(asset($themeTrue.'img/icon/payout.png')); ?>" alt="<?php echo app('translator')->get('payout'); ?>"/><?php echo app('translator')->get('Withdrawal'); ?>
        </a>
     </li>
     <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
        <a style="cursor: pointer" onclick="show()" class="sidebar-link">
            <i style="color: #802A9E;font-size:1.5rem" class="fa fa-solid fa-dollar-sign"></i>&nbsp;&nbsp;&nbsp; <?php echo app('translator')->get('Income'); ?>
        </a>
     </li>
     <div id="show" style="display: none">
        <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
            <a href="<?php echo e(route('user.referral')); ?>" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-user-plus"></i> &nbsp; <?php echo app('translator')->get('joining referral'); ?>
            </a>
         </li>
         <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
            <a href="#0" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-user"></i>&nbsp; <?php echo app('translator')->get('team bonus'); ?>
            </a>
         </li>
         <li class="<?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>">
            <a href="#0" class="sidebar-link">
                <i style="color: #802A9E;font-size:1.5rem" class="fa fa-plus"></i>&nbsp; <?php echo app('translator')->get('daily profit'); ?>
            </a>
         </li>
     </div>
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
 <script>
    function show(){
        var check = document.getElementById("show").style.display;
        if(check == 'block'){
            document.getElementById("show").style.display = "none"
        }else{
            document.getElementById("show").style.display = "block"
        }

    }
 </script>


<?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/partials/sidebar.blade.php ENDPATH**/ ?>