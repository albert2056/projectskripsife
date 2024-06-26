

<?php $__env->startSection('content'); ?>

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Paket Usher</h1>
        </div>
    </div>

    <div class="row" style="margin-left: 60px;">
        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6 mb-5">
                <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px; position: relative;">
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo e(asset('Assets/paketCoupleImg.png')); ?>" style="width: 200px; height: 165px" class="card-img-top mt-5" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-center btn-text-card"><?php echo e($datas['name']); ?></h5>
                        <div class="text-package mt-4 mb-5" style="text-align: left; margin: 0 auto; width: fit-content; font-size: 20px">
                            <ul>
                                <?php $__currentLoopData = $datas['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $desc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($desc); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <h5 class="card-title text-center btn-text-card" style="position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%);">RP. <?php echo e($datas['price']); ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\project skripsi\with git\front end\project skripsi\laravel\front-end-project\resources\views/packagePreview.blade.php ENDPATH**/ ?>