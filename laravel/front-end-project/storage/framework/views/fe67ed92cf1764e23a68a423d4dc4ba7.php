<?php $__env->startSection('content'); ?>

<style>
    .card {
        width: 400px;
        height: 600px;
        background-color: rgba(255, 218, 217, 0.7);
        position: relative;
        border: none;
        border-radius: 0px;
        margin-bottom: 5px;
    }

    .card-overlay {
        position: absolute;
        top: 44%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 340px;
        height: 440px;
        background-color: #F2F2F2;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }

    .overlay-content {
        color: #333333;
        margin-top: 15px;
        letter-spacing: 1px;
        font-size: 22px;
        font-weight: 500;
    }

    .card-body {
        padding-top: 507px;
    }

    .btn-card-custom {
    background-color: #FF6969;
    border: none;
    outline: none;
    width: 170px;
    height: 62px;
    font-size: 18px;
    font-weight: 500;
    border-radius: 12px;
    }   

    .btn-card-custom:hover {
        background-color: #FF8787;
    }

    .btn-card-custom:active {
        background-color: #FF8787;
    }

</style>

<div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
    <h1 class="text-custom1" style="letter-spacing: 2px">Busana</h1>
</div>

<div class="container" style="margin-bottom: 150px">
    <form action="<?php echo e(route('outfitChoose')); ?>" method="POST" class="d-flex">
        <?php echo csrf_field(); ?>
        <div class="row row-cols-1 row-cols-md-3 g-5">
            <?php $__currentLoopData = $outfits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col">
                    <div class="card">
                        <div class="card-overlay">
                            <img src="<?php echo e(asset('Assets/outfit/' . $datas['image'])); ?>" style="width: 300px; height: 360px; border-radius: 10px; margin-top: 20px" alt="Overlay Image">
                            <div class="overlay-content">
                                <p> <?php echo e($datas['name']); ?> </p>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <button class="btn btn-primary btn-card-custom" type="submit" name="outfitId" type="number" value=<?php echo e($datas['id']); ?>>Pilih</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </form>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/outfitCategory.blade.php ENDPATH**/ ?>