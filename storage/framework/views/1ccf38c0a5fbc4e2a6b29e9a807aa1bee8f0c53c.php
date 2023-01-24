
<?php $__env->startSection('title',trans('Profile Settings')); ?>

<?php $__env->startSection('content'); ?>

<!-- profile setting -->
<section class="profile-setting mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="header-text-full">
                    <h2><?php echo app('translator')->get('Profile Settings'); ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="upload-img">
                    <form method="post" action="<?php echo e(route('user.updateProfile')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="img-box">
                            <input
                                accept="image/*"
                                name="image"
                                type="file"
                                id="image"
                                onchange="previewImage()"
                            />
                            <span class="select-file"
                                ><?php echo app('translator')->get('Choose image'); ?></span
                            >
                            <img
                                id="frame"
                                src="<?php echo e(getFile(config('location.user.path').$user->image)); ?>"
                                alt="<?php echo app('translator')->get('preview user image'); ?>"
                            />
                        </div>
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <h3 class="golden-text"><?php echo app('translator')->get(ucfirst($user->username)); ?></h3>
                              <p><?php echo app('translator')->get('Joined At'); ?> <?php echo app('translator')->get($user->created_at->format('d M, Y g:i A')); ?></p>
                        <button class="gold-btn"><?php echo app('translator')->get('Image Update'); ?></button>
                    </form>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="edit-area">
                    <div class="profile-navigator">
                        <button
                            tab-id="tab1"
                            class="golden-text tab <?php echo e($errors->has('profile') ? 'active' : (($errors->has('password') || $errors->has('identity') || $errors->has('addressVerification')) ? '' : ' active')); ?>"
                        >
                            <?php echo app('translator')->get('Profile Information'); ?>
                        </button>
                        <button tab-id="tab2" class="golden-text tab <?php echo e($errors->has('password') ? 'active' : ''); ?>">
                            <?php echo app('translator')->get('Password Setting'); ?>
                        </button>
                        <button tab-id="tab3" class="golden-text tab <?php echo e($errors->has('identity') ? 'active' : ''); ?>">
                            <?php echo app('translator')->get('Identity Verification'); ?>
                        </button>
                        <button tab-id="tab4" class="golden-text tab <?php echo e($errors->has('addressVerification') ? 'active' : ''); ?>">
                            <?php echo app('translator')->get('Address Verification'); ?>
                        </button>
                    </div>

                    <div id="tab1" class="content <?php echo e($errors->has('profile') ? ' active' : (($errors->has('password') || $errors->has('identity') || $errors->has('addressVerification')) ? '' :  ' active')); ?>">
                        <form action="<?php echo e(route('user.updateInformation')); ?>" method="post">
                            <?php echo method_field('put'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="firstname" class="golden-text"><?php echo app('translator')->get('First Name'); ?></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="firstname"
                                        id="firstname"
                                        value="<?php echo e(old('firstname')?: $user->firstname); ?>"
                                    />
                                    <?php if($errors->has('firstname')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('firstname')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="lastname" class="golden-text"><?php echo app('translator')->get('Last Name'); ?></label>
                                    <input
                                        type="text"
                                        id="lastname"
                                        name="lastname"
                                        class="form-control"
                                        value="<?php echo e(old('lastname')?: $user->lastname); ?>"
                                    />
                                    <?php if($errors->has('lastname')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('lastname')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="username" class="golden-text"><?php echo app('translator')->get('Username'); ?></label>
                                    <input
                                        type="text"
                                        id="username"
                                        name="username"
                                        value="<?php echo e(old('username')?: $user->username); ?>"
                                        class="form-control"
                                    />
                                    <?php if($errors->has('username')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('username')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="email" class="golden-text"><?php echo app('translator')->get('Email Address'); ?></label>
                                    <input
                                        type="email"
                                        id="email"
                                        value="<?php echo e($user->email); ?>"
                                        readonly
                                        class="form-control"
                                    />
                                    <?php if($errors->has('email')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('email')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="phone" class="golden-text"><?php echo app('translator')->get('Phone Number'); ?></label>
                                    <input
                                        type="text"
                                        id="phone"
                                        readonly
                                        class="form-control"
                                        value="<?php echo e($user->phone); ?>"
                                    />
                                    <?php if($errors->has('phone')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('phone')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="language_id" class="golden-text"><?php echo app('translator')->get('Preferred language'); ?></label>
                                    <select
                                        class="form-select"
                                        name="language_id"
                                        id="language_id"
                                        aria-label="Default select example"
                                    >
                                        <option value="" disabled><?php echo app('translator')->get('Select Language'); ?></option>
                                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $la): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($la->id); ?>" <?php echo e(old('language_id', $user->language_id) == $la->id ? 'selected' : ''); ?>>
                                                <?php echo app('translator')->get($la->name); ?>
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('language_id')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('language_id')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12 mb-4">
                                    <label for="address" class="golden-text"><?php echo app('translator')->get('Address'); ?></label>
                                    <textarea
                                        class="form-control"
                                        id="address"
                                        name="address"
                                        cols="30"
                                        rows="3"
                                    ><?php echo app('translator')->get($user->address); ?></textarea>
                                    <?php if($errors->has('address')): ?>
                                        <div
                                            class="error text-danger"><?php echo app('translator')->get($errors->first('address')); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <button type="submit" class="gold-btn"><?php echo app('translator')->get('Update User'); ?></button>
                        </form>
                    </div>

                    <div id="tab2" class="content <?php echo e($errors->has('password') ? 'active' : ''); ?>">
                        <form method="post" action="<?php echo e(route('user.updatePassword')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="current_password" class="golden-text"><?php echo app('translator')->get('Current Password'); ?></label>
                                    <input
                                        type="password"
                                        id="current_password"
                                        name="current_password"
                                        autocomplete="off"
                                        class="form-control"
                                        placeholder="<?php echo app('translator')->get('Enter Current Password'); ?>"
                                    />
                                    <?php if($errors->has('current_password')): ?>
                                        <div class="error text-danger"><?php echo app('translator')->get($errors->first('current_password')); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="password" class="golden-text"><?php echo app('translator')->get('New Password'); ?></label>
                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        autocomplete="off"
                                        class="form-control"
                                        placeholder="<?php echo app('translator')->get('Enter New Password'); ?>"
                                    />
                                    <?php if($errors->has('password')): ?>
                                        <div class="error text-danger"><?php echo app('translator')->get($errors->first('password')); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-12 mb-4">
                                    <label for="password_confirmation" class="golden-text"><?php echo app('translator')->get('Confirm Password'); ?></label>
                                    <input
                                        type="password"
                                        id="password_confirmation"
                                        name="password_confirmation"
                                        autocomplete="off"
                                        class="form-control"
                                        placeholder="<?php echo app('translator')->get('Confirm Password'); ?>"
                                    />
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <div class="error text-danger"><?php echo app('translator')->get($errors->first('password_confirmation')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" class="gold-btn">
                                <?php echo app('translator')->get('Update Password'); ?>
                            </button>
                        </form>
                    </div>

                    <div id="tab3" class="content <?php echo e($errors->has('identity') ? 'active' : ''); ?>">
                        <?php if(in_array($user->identity_verify,[0,3])  ): ?>
                            <?php if($user->identity_verify == 3): ?>
                                <div class="alert mb-0">
                                    <img src="<?php echo e(asset($themeTrue.'img/icon/cross.png')); ?>" alt="<?php echo app('translator')->get('cross img'); ?>"/>
                                    <span><?php echo app('translator')->get('You previous request has been rejected'); ?></span>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="<?php echo e(route('user.verificationSubmit')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="col-md-12 mb-3">
                                    <div class="form-group input-group">
                                        <label class="form-label d-block w-100 golden-text"
                                                for="identity_type"><?php echo app('translator')->get('Identity Type'); ?></label>
                                        <select name="identity_type" id="identity_type"
                                                class="form-control d-block">
                                            <option class="text-white bg-dark" value="" selected disabled><?php echo app('translator')->get('Select Type'); ?></option>
                                            <?php $__currentLoopData = $identityFormList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sForm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option class="text-white bg-dark"
                                                    value="<?php echo e($sForm->slug); ?>" <?php echo e(old('identity_type', @$identity_type) == $sForm->slug ? 'selected' : ''); ?>><?php echo app('translator')->get($sForm->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['identity_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="error text-danger"><?php echo app('translator')->get($message); ?> </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <?php if(isset($identityForm)): ?>
                                    <?php $__currentLoopData = $identityForm->services_form; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($v->type == "text"): ?>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label
                                                        for="<?php echo e($k); ?>" class="golden-text"><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span class="text-danger">*</span>  <?php endif; ?>
                                                    </label>
                                                    <input type="text" name="<?php echo e($k); ?>"
                                                            class="form-control "
                                                            value="<?php echo e(old($k)); ?>" id="<?php echo e($k); ?>"
                                                            <?php if($v->validation == 'required'): ?> required <?php endif; ?>>

                                                    <?php if($errors->has($k)): ?>
                                                        <div
                                                            class="error text-danger"><?php echo app('translator')->get($errors->first($k)); ?> </div>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        <?php elseif($v->type == "textarea"): ?>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label
                                                        for="<?php echo e($k); ?>" class="golden-text"><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span
                                                                class="text-danger">*</span>  <?php endif; ?>
                                                    </label>
                                                    <textarea name="<?php echo e($k); ?>" id="<?php echo e($k); ?>"
                                                            class="form-control "
                                                            rows="5"
                                                            placeholder="<?php echo e(trans('Type Here')); ?>"
                                                            <?php if($v->validation == 'required'): ?><?php endif; ?>><?php echo e(old($k)); ?></textarea>
                                                    <?php $__errorArgs = [$k];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="error text-danger">
                                                        <?php echo e(trans($message)); ?>

                                                    </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        <?php elseif($v->type == "file"): ?>
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="golden-text"><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?>
                                                            <span class="text-danger">*</span>  <?php endif; ?>
                                                    </label>

                                                    <br>
                                                    <div class="fileinput fileinput-new "
                                                        data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail "
                                                            data-trigger="fileinput">
                                                            <img class="w-150px"
                                                                src="<?php echo e(getFile(config('location.default'))); ?>"
                                                                alt="...">
                                                        </div>
                                                        <div
                                                            class="fileinput-preview fileinput-exists thumbnail wh-200-150 "></div>

                                                        <div class="img-input-div">
                                                        <span class="btn btn-success btn-file">
                                                            <span
                                                                class="fileinput-new "> <?php echo app('translator')->get('Select'); ?> <?php echo e($v->field_level); ?></span>
                                                            <span
                                                                class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                                            <input type="file" name="<?php echo e($k); ?>"
                                                                    value="<?php echo e(old($k)); ?>" accept="image/*"
                                                                    <?php if($v->validation == "required"): ?><?php endif; ?>>
                                                        </span>
                                                            <a href="#"
                                                                class="btn btn-danger fileinput-exists"
                                                                data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                        </div>

                                                    </div>

                                                    <?php $__errorArgs = [$k];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="error text-danger">
                                                        <?php echo e(trans($message)); ?>

                                                    </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <button type="submit" class="gold-btn mt-2">
                                        <?php echo app('translator')->get('Submit'); ?>
                                    </button>
                                <?php endif; ?>
                            </form>
                        <?php elseif($user->identity_verify == 1): ?>
                            <div class="alert mb-0">
                                <img src="<?php echo e(asset($themeTrue.'img/icon/notification.png')); ?>" alt="<?php echo app('translator')->get('notification img'); ?>"/>
                                <span> <?php echo app('translator')->get('Your KYC submission has been pending'); ?></span>
                            </div>
                        <?php elseif($user->identity_verify == 2): ?>
                            <div class="alert mb-0">
                                <img src="<?php echo e(asset($themeTrue.'img/icon/notification.png')); ?>" alt="<?php echo app('translator')->get('notification img'); ?>"/>
                                <span> <?php echo app('translator')->get('Your KYC already verified'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div id="tab4" class="content <?php echo e($errors->has('addressVerification') ? 'active' : ''); ?>">
                        <?php if(in_array($user->address_verify,[0,3])  ): ?>
                            <?php if($user->address_verify == 3): ?>
                                <div class="alert mb-0">
                                    <img src="<?php echo e(asset($themeTrue.'img/icon/cross.png')); ?>" alt="<?php echo app('translator')->get('cross img'); ?>"/>
                                    <span> <?php echo app('translator')->get('You previous request has been rejected'); ?></span>
                                </div>
                            <?php endif; ?>
                            <form method="post" action="<?php echo e(route('user.addressVerification')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label golden-text"><?php echo e(trans('Address Proof')); ?> <span
                                                class="text-danger">*</span> </label><br>

                                        <div class="fileinput fileinput-new "
                                            data-provides="fileinput">
                                            <div class="fileinput-new thumbnail "
                                                data-trigger="fileinput">
                                                <img class="w-150px "
                                                    src="<?php echo e(getFile(config('location.default'))); ?>"
                                                    alt="...">
                                            </div>
                                            <div
                                                class="fileinput-preview fileinput-exists thumbnail wh-200-150 "></div>

                                            <div class="img-input-div">
                                                        <span class="btn btn-success btn-file">
                                                            <span
                                                                class="fileinput-new "> <?php echo app('translator')->get('Select Image'); ?> </span>
                                                            <span
                                                                class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                                            <input type="file" name="addressProof"
                                                                    value="<?php echo e(old('addressProof')); ?>"
                                                                    accept="image/*">
                                                        </span>
                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                    data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                            </div>

                                        </div>

                                        <?php $__errorArgs = ['addressProof'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="error text-danger">
                                                <?php echo e(trans($message)); ?>

                                            </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <button type="submit" class="gold-btn">
                                    <?php echo app('translator')->get('Submit'); ?>
                                </button>

                            </form>
                        <?php elseif($user->address_verify == 1): ?>
                            <div class="alert mb-0">
                                <img src="<?php echo e(asset($themeTrue.'img/icon/notification.png')); ?>" alt="<?php echo app('translator')->get('notification img'); ?>"/>
                                <span> <?php echo app('translator')->get('Your KYC submission has been pending'); ?></span>
                            </div>
                        <?php elseif($user->address_verify == 2): ?>
                            <div class="alert mb-0">
                                <img src="<?php echo e(asset($themeTrue.'img/icon/notification.png')); ?>" alt="<?php echo app('translator')->get('notification img'); ?>"/>
                                <span> <?php echo app('translator')->get('Your KYC already verified'); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>
<?php $__env->startPush('css-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'scss/bootstrap-fileinput.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('extra-js'); ?>
    <script src="<?php echo e(asset($themeTrue.'js/bootstrap-fileinput.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";
        $(document).on('click', '#image-label', function () {
            $('#image').trigger('click');
        });
        $(document).on('change', '#image', function () {
            var _this = $(this);
            var newimage = new FileReader();
            newimage.readAsDataURL(this.files[0]);
            newimage.onload = function (e) {
                $('#image_preview_container').attr('src', e.target.result);
            }
        });


        $(document).on('change', "#identity_type", function () {
            let value = $(this).find('option:selected').val();
            window.location.href = "<?php echo e(route('user.profile')); ?>/?identity_type=" + value
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\infinityfx\resources\views/themes/deepblack/user/profile/myprofile.blade.php ENDPATH**/ ?>