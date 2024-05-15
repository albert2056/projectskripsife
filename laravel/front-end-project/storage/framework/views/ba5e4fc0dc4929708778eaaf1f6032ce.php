

<?php $__env->startSection('content'); ?>

<style>
    body {
        background-image: url('Assets/portfolioBg.jpg');
        background-size: cover;
        background-position: center;
    }
    tr {
        cursor: pointer;
    }
    tr:hover {
        background-color: #f1f1f1; /* Change to your preferred hover color */
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/transaction.css')); ?>">

<main class="table" id="customers_table" style="margin-top: 150px; margin-left: 150px; margin-bottom: 50px">
    <section class="table__header">
        <h1 style="margin-top: 20px; margin-left: 20px">Transaction History</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
        </div>
    </section>
    <section class="table__body">
        <table>
            <thead>
                <tr>
                    <th> ID <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Venue <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Event Date <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                    <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr onclick="window.location.href='/transaction/detail/admin/<?php echo e($datas['id']); ?>'">
                        <td> <?php echo e($datas['id']); ?> </td>
                        <td><?php echo e($datas['name']); ?></td>
                        <td><?php echo e($datas['venue']); ?> </td>
                        <td>
                            <?php echo e(\Carbon\Carbon::parse($datas['eventDate'])->format('d/m/Y')); ?>

                        </td>
                        <?php if($datas['paymentStatus'] == "NOT PAID"): ?>
                            <td>
                                <p class="status notPaid">Not Paid</p>
                            </td>
                        <?php else: ?>
                            <td>
                                <p class="status paid">Paid</p>
                            </td>
                        <?php endif; ?>
                        <td> 
                            <div style="display: inline-block;">
                                <form method="POST" action="<?php echo e(route('changeStatus')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($datas['id']); ?>">
                                    <button class="icon-button" style="margin-right: 25px" type="submit" onclick="changeStatusPopup()">
                                        <img src="<?php echo e(asset('Assets/check.png')); ?>" alt="" srcset="">
                                    </button>
                                </form>
                            </div>
                            <div style="display: inline-block;">
                                <form method="POST" action="<?php echo e(route('deleteTransaction')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="hidden" name="id" value="<?php echo e($datas['id']); ?>">
                                    <button class="icon-button" type="submit" onclick="transactionDeletePopup()">
                                        <img src="<?php echo e(asset('Assets/trash.png')); ?>" alt="" srcset="">
                                    </button>    
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
</main>
<script src="<?php echo e(asset('js/transScript.js')); ?>"></script>
<script src="<?php echo e(asset('js/alert.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\project skripsi\with git\front end\project skripsi\laravel\front-end-project\resources\views/transactionAdmin.blade.php ENDPATH**/ ?>