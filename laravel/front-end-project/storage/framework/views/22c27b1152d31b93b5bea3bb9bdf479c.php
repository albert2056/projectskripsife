<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6 text-left mb-5" style="margin-top: 190px">
            <h1 class="text-custom2" style="margin-bottom: 30px">Tambahkan Paket Baru</h1>
        </div>
    </div>
    
    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-6">
            <form action="<?php echo e(route('createPackage')); ?>" method="POST" onsubmit="return validatePackageForm()">  
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="inputPackageName" style="margin-bottom: 10px; font-size: 18px">Nama Paket</label>
                    <input type="text" class="form-control" id="name" name="name" style="margin-bottom: 30px;" value="">
                </div>

                <div class="form-group">
                    <label for="inputPackagePrice" style="margin-bottom: 10px; font-size: 18px">Harga Paket</label>
                    <input type="text" class="form-control" id="price_formatted" name="price_formatted" style="margin-bottom: 30px;" onkeyup="formatPrice(this)" value="">
                    <input type="hidden" name="price" id="price">
                </div>
                
                <div class="form-group">
                    <label for="inputPackageDescription" style="margin-bottom: 10px; font-size: 18px">Deskripsi Paket</label>
                    <textarea class="form-control" id="description" name="description" style="margin-bottom: 30px;"></textarea>
                </div>                         
                
                <button class="btn btn-primary btn-block btn-card mt-4" style="margin-bottom: 150px" type="submit" onclick="return validateAndSubmitFormPackageCreate()">Submit</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <img src="<?php echo e(asset('Assets/formImg.png')); ?>" alt="Image" class="img-fluid" style="width: 500px; height: 450px; margin-left: 160px;">
        </div>
    </div>
</div>

<script src="<?php echo e(asset('js/validate.js')); ?>"></script>
<script src="<?php echo e(asset('js/alert.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/packageCreateForm.blade.php ENDPATH**/ ?>