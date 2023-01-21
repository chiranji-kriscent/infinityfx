<?php if(isset($templates['why-chose-us'][0]) && $whyChoseUs = $templates['why-chose-us'][0]): ?>
<!-- why choose us start -->
<section class="choose-section">
    <div class="container">
       <div class="row">
          <div class="col">
             <div class="header-text text-center">
                <h5><?php echo app('translator')->get($whyChoseUs->description->title); ?></h5>
                <h2><?php echo app('translator')->get($whyChoseUs->description->sub_title); ?></h2>
                <p>
                    <?php echo app('translator')->get($whyChoseUs->description->short_details); ?>
                </p>
             </div>
          </div>
       </div>

       <?php if(isset($contentDetails['why-chose-us'])): ?>
            <div class="row">
                <?php $__currentLoopData = $contentDetails['why-chose-us']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 mb-4">
                        <div
                            class="box"
                            data-aos="fade-up"
                            data-aos-duration="800"
                            data-aos-anchor-placement="center-bottom"
                        >
                            <div class="img">
                            <img class="img-center" src="<?php echo e(getFile(config('location.content.path').@$item->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('why-choose-us image'); ?>" />
                            </div>
                            <div class="text">
                            <h4 class="golden-text"><?php echo app('translator')->get(@$item->description->title); ?></h4>
                            <p><?php echo app('translator')->get(@$item->description->information); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
       <?php endif; ?>
    </div>
</section>
<!-- why choose us end -->
<?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/infinityfx/resources/views/themes/deepblack/sections/why-chose-us.blade.php ENDPATH**/ ?>