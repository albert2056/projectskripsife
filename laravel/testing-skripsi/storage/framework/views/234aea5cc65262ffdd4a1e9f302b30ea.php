<div>
    <ul>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($product['name']); ?> - <?php echo e($product['price']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH D:\Documents\project skripsi\testing-skripsi\laravel\testing-skripsi\resources\views/home.blade.php ENDPATH**/ ?>