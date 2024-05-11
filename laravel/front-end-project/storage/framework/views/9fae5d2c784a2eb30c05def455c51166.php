<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-6 text-left mb-5" style="margin-top: 190px">
            <h1 class="text-custom2" style="margin-bottom: 30px">Update Outfit</h1>
        </div>
    </div>

    <div class="row" style="margin-bottom: 50px">
        <div class="col-md-6">
            <form method="POST" action="<?php echo e(route('updateOutfit', ['outfitId' => $outfit['id']])); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="form-group">
                    <label for="inputOutfitName" style="margin-bottom: 10px; font-size: 18px">Nama Busana</label>
                    <input type="text" class="form-control" id="name" name="name" style="margin-bottom: 30px;" value="">
                </div>

                <div class="form-group">
                    <label for="inputOutfitCategory" style="margin-bottom: 10px; font-size: 18px">Kategori Busana</label>
                    <select class="form-control" id="outfitCategoryId" name="outfitCategoryId" style="margin-bottom: 30px;">
                        <option value="" disabled selected>Pilih Kategori Busana</option>
                        <option value="1">Gaun</option>
                        <option value="2">Kebaya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputOutfitQuantity" style="margin-bottom: 10px; font-size: 18px">Kuantitas</label>
                    <input type="number" class="form-control" id="qty" name="qty" style="margin-bottom: 30px;" min="0" max="8">
                </div>

                <div class="form-group">
                    <label for="inputOutfitImage" style="margin-bottom: 10px; font-size: 18px">Tambahkan Gambar</label>
                    <input type="file" class="form-control" id="image" name="image" style="margin-bottom: 30px;">
                </div>                

                <button class="btn btn-primary btn-block btn-card mt-4" style="margin-bottom: 150px" type="submit">Submit</button>
            </form>
        </div>

        <div class="col-md-6">
            <img src="<?php echo e(asset('Assets/formImg.png')); ?>" alt="Image" class="img-fluid" style="width: 500px; height: 450px; margin-left: 160px;">
        </div>
    </div>
</div>


<script src="<?php echo e(asset('js/validate.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/outfitUpdateForm.blade.php ENDPATH**/ ?>