<?php $__env->startSection('content'); ?>

<style>
  .bg-image {
    position: relative;
    background-image: url('../external/portfolioBg.jpeg');
    opacity: 80%;
    background-size: cover;
    background-position: center;
    height: 100vh;
    width: 100%;
    /* z-index: -1; */
  }

  .overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 70%;
    height: 70%;
    max-width: 800px;
    max-height: 600px;
    background-color: rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
  }

  .overlay-text {
    color: rgba(255, 105, 105);
    font-size: 54px;
    font-weight: bolder;
    font-family: 'Dancing Script', cursive;
    text-align: center;
  }

  .page-bg {
    background-image: url('../external/portfolioBg2.jpeg');
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    height: 150vh;
    width: 100%;
    /* z-index: -1; */
  }

  .card {
    position: relative;
    z-index: 1;
    background-color: rgb(236, 234, 234);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  }

  .carousel-item img {
    width: 605px; 
    height: 490px;
    object-fit: contain;
  }

  .text-detail {
    margin-bottom: 75px;
    font-family: 'Dancing Script', cursive;
    font-size: 3rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    text-align: center;
  }
</style>
    
  <div class="bg-image">
    <div class="overlay">
      <div class="overlay-text"><?php echo e($portfolio['name']); ?></div>
    </div>
  </div>

  <div class="page-bg">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-7 mb-4">
          <div class="text-detail" style="margin-bottom: 50px">
            <p><?php echo e(\Carbon\Carbon::parse($portfolio['eventDate'])->format('d/m/Y')); ?></p>
            <p><?php echo e($portfolio['venue']); ?></p>
            <p><?php echo e($portfolio['gownName']); ?></p>
          </div>
          <div class="card">
            <img src="data:image/jpeg;base64,<?php echo e($portfolio['image']); ?>" class="d-block w-100" alt="Image 1" style="width: 500px; height: 700px;">
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/portfolioDetail.blade.php ENDPATH**/ ?>