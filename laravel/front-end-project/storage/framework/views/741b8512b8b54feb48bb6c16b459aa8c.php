<?php $__env->startSection('content'); ?>

<div class="container" style="margin-bottom: 180px">
    <div class="row">
        <div class="col text-center mb-5" style="margin-top: 150px; margin-left: 20px">
            <h1 class="text-custom1">Pilih Paket Usher</h1>
        </div>
    </div>

    <div class="row mb-5" style="margin-left: 60px">
        <div class="col-md-6 mb-3">
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                
                <div class="d-flex justify-content-center">
                    <img src="<?php echo e(asset('Assets/paketCoupleImg.png')); ?>" style="width: 200px; height: 165px" class="card-img-top mt-5" alt="...">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title text-center btn-text-card">Premium Package</h5>
                    <div class="text-package mt-4 mb-5" style="text-align: left; margin: 0 auto; width: fit-content; font-size: 20px">
                        <ul>
                            <li>Usher</li>
                            <li>Hairdo</li>
                            <li>Hairpiece</li>
                            <li>Busana</li>
                            <li>Transport Jakarta - Tangerang</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-block btn-card">Pilih Paket</button>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3" >
            <div class="card shadow rounded-5" style="border-width: 0px; width: 535px; height: 650px">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo e(asset('Assets/paketCoupleImg.png')); ?>" style="width: 200px; height: 165px" class="card-img-top mt-5" alt="...">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title text-center btn-text-card">Standard Package</h5>
                    <div class="text-package mt-4 mb-5" style="text-align: left; margin: 0 auto; width: fit-content; font-size: 20px">
                        <ul>
                            <li>Usher</li>
                            <li>Transport Jakarta - Tangerang</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-card" style="margin-top: 85px">Pilih Paket</button>
                </div>
            </div>
        </div>
    </div>
    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/packageChoose.blade.php ENDPATH**/ ?>