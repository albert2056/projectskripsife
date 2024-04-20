

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/invoice.css')); ?>"/>

<div class="py-4" style="margin-top: 120px">
    <div class="px-14 py-6">
    <table class="w-full border-collapse border-spacing-0">
        <tbody>
        <tr>
            <td class="w-full align-top">
            <div>
                <p class="h-12">Invoice</p>
                <p class="h-9"><?php echo e($transaction['name']); ?></p>
                <p class="h-9" style="margin-bottom: 40px">Aloft TB Simatupang</p>
            </div>
            </td>

            <td class="align-top">
            <div class="text-sm">
                <table class="border-collapse border-spacing-0">
                <tbody>
                    <tr>
                    <td class="border-r pr-4">
                        <div>
                        <p class="whitespace-nowrap text-slate-400 text-right h-9">Date</p>
                        <p class="whitespace-nowrap font-bold text-main text-right h-9"><?php echo e($transaction['eventDate']); ?></p>
                        </div>
                    </td>
                    <td class="pl-4">
                        <div>
                        <p class="whitespace-nowrap text-slate-400 text-right h-9">Invoice #</p>
                        <p class="whitespace-nowrap font-bold text-main text-right h-9"><?php echo e($transaction['id']); ?></p>
                        </div>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </td>
        </tr>
        </tbody>
    </table>
    </div>

    <div class="bg-slate-100 px-14 py-6 text-sm">
    <table class="w-full border-collapse border-spacing-0">
        <tbody>
        <tr>
            <td class="w-1/2 align-top">
            <div class="text-med text-neutral-600">
                <p class="font-bold text-med">Billed To</p>
                <p><?php echo e($transaction['name']); ?></p>
                <p><?php echo e($user['phoneNumber']); ?></p>
            </div>
            </td>
            <td class="w-1/2 align-top text-right">
            <div class="text-med text-neutral-600">
                <p class="font-bold">From</p>
                <p>Hayden Usher</p>
                <p>Bank BCA 4840315296</p>
                <p>A/N Cecilia</p>
            </div>
            </td>
        </tr>
        </tbody>
    </table>
    </div>

    <div class="px-14 py-10 text-lg text-neutral-700">
    <table class="w-full border-collapse border-spacing-0">
        <thead>
        <tr>
            <td class="border-b-2 border-main pb-3 pl-2 font-bold text-main">Service</td>
            <td class="border-b-2 border-main pb-3 pl-2 text-left font-bold text-main">Price</td>
            <td class="border-b-2 border-main pb-3 pl-2 text-center font-bold text-main">Total Usher</td>
            
            <td class="border-b-2 border-main pb-3 pl-2 pr-3 text-right font-bold text-main">Price - DP</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php if($transaction['packageId'] == 1): ?>
               <td class="border-b py-3 pl-2">Premium Package</td> 
               <td class="border-b py-3 pl-2 text-left">Rp550,000</td>
            <?php else: ?>
                <td class="border-b py-3 pl-2">Standard Package</td> 
                <td class="border-b py-3 pl-2 text-left">Rp400,000</td>
            <?php endif; ?>
            
            <td class="border-b py-3 pl-2 text-center"><?php echo e($transaction['totalUsher']); ?></td>
            
            <td class="border-b py-3 pl-2 pr-3 text-right">Rp<?php echo e($transaction['totalPrice']); ?></td>
        </tr>
        <tr>
            <td class="border-b py-3 pl-2" style="color: #5E6470; font-size: 14px" colspan="5">
                Kebaya + Makeup + Hairdo + Hairpiece + Label Angpao + Angpao Kosong + Transport Jkt/Tgr
            </td>
        </tr>
        
        <tr>
            <td colspan="5">
            <table class="w-full border-collapse border-spacing-0">
                <tbody>
                <tr>
                    <td class="w-full"></td>
                    <td>
                    <table class="w-full border-collapse border-spacing-0">
                        <tbody>
                        <tr>
                            <td class="border-b p-3">
                            <div class="whitespace-nowrap text-slate-400">Net total:</div>
                            </td>
                            <td class="border-b p-3 text-right">
                            <div class="whitespace-nowrap font-bold text-main">Rp<?php echo e($transaction['totalPrice']); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-main p-3">
                            <div class="whitespace-nowrap font-bold text-white">Total:</div>
                            </td>
                            <td class="bg-main p-3 text-right">
                            <div class="whitespace-nowrap font-bold text-white">Rp<?php echo e($transaction['totalPrice']); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">
                            <div class="whitespace-nowrap h-11"> Status : <?php echo e($transaction['paymentStatus']); ?></div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                </tr>
                </tbody>
            </table>
            </td>
        </tr>
        </tbody>
    </table>
    
    </div>

    

    <div class="px-14 py-10 text-lg text-neutral-700">
    <p class="text-main font-bold">Notes</p>
    <p style="margin-bottom: 50px">Harap sertakan bukti transfer dengan mengirimkannya kepada admin melalui WhatsApp</p>
    </div>

    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Documents\project skripsi\with git\front end\project skripsi\laravel\front-end-project\resources\views/invoice.blade.php ENDPATH**/ ?>