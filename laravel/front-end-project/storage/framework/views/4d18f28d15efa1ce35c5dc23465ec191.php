

<?php $__env->startSection('content'); ?>

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Pilih Busana Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <form action="<?php echo e(route('outfitChoose')); ?>" method="POST" class="d-flex">
            <?php echo csrf_field(); ?>
            <div class="col-md-6 mb-3">
                <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                    <h5 class="card-title text-center mt-5 btn-text-card">Gaun</h5>
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo e(asset('Assets/gaunImg.png')); ?>" style="width: 400px; height: 430px" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <button class="btn btn-primary btn-block btn-card" style="display: inline-flex; justify-content: center; align-items: center;" type="submit" name="outfitCategoryId" type="number" value=1>Pilih Busana</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-3">
                <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                    <h5 class="card-title text-center mt-5 btn-text-card">Kebaya</h5>
                    <div class="d-flex justify-content-center">
                        <img src="<?php echo e(asset('Assets/kebayaImg.png')); ?>" style="width: 400px; height: 430px" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <button class="btn btn-primary btn-block btn-card" style="display: inline-flex; justify-content: center; align-items: center;" type="submit" name="outfitCategoryId" type="number" value=2>Pilih Busana</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\project skripsi\with git\front end\project skripsi\laravel\front-end-project\resources\views/outfitChoose.blade.php ENDPATH**/ ?>