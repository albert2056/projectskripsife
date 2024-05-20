<?php $__env->startSection('content'); ?>

<style>
    .btn-plus {
        justify-content: right;
        display: flex; 
        font-size: 32px;
        color: #FF6969;
        margin-bottom: 20px;
    }

    .btn-card-custom {
        background-color: #FF6969;
        border: none;
        outline: none;
        width: 180px;
        height: 62px;
        font-size: 18px;
        font-weight: 500;
        border-radius: 12px;
        margin-top: 25px;
    }   

    .btn-card-custom:hover {
        background-color: #FF8787;
    }

    .btn-card-custom:active {
        background-color: #FF8787;
    }
</style>

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Paket Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <div class="btn-plus" style="text-decoration: none;">
            <a href="/packagecreateform" style="color: #FF6969;">
                <i class="fa-solid fa-plus" style="margin-bottom: 10px;"></i>
            </a>
        </div>
        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-6 mb-5">
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">   
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
                    <div class="row">
                        <div class="col">
                            <form method="GET" action="<?php echo e(route('packageUpdateForm', ['id' => $datas['id']])); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($datas['id']); ?>">
                                <button type="submit" class="btn btn-secondary btn-card-custom">Edit</button>
                            </form>
                        </div>
                        <div class="col">
                            <form method="POST" action="<?php echo e(route('deletePackage')); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="id" value="<?php echo e($datas['id']); ?>">
                                <button type="submit" class="btn btn-primary btn-card-custom" onclick="packageDeletePopup()">Delete</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script src="<?php echo e(asset('js/alert.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/packageAdmin.blade.php ENDPATH**/ ?>