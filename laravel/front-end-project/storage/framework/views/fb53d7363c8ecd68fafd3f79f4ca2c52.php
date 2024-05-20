<?php $__env->startSection('content'); ?>

<style>
  .bg-image {
    position: relative;
    background-image: url('Assets/portfolioBg.jpg');
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
    background-image: url('Assets/portfolioBg2.jpg');
    background-size: cover;
    background-position: center;
    padding: 50px 0;
    height: 130vh;
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
    width: 735px; 
    height: 490px;
    object-fit: contain;
  }
  
  .carousel-control-prev,
  .carousel-control-next {
    width: 5%;
    color: #000;
    background: none;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    cursor: pointer;
    position: absolute;
    z-index: 1000;
    font-size: 60px;
    text-decoration: none;
  }
  
  .carousel-control-prev::before,
  .carousel-control-next::before {
    content: '\2039';
  }
  
  .carousel-control-next::before {
    content: '\203a';
  }
  
  .carousel-control-prev:hover::before,
  .carousel-control-next:hover::before {
    color: #FF5733;
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
        <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo e(asset('Assets/portfolio/' . $portfolio['image'])); ?>" class="d-block w-100" alt="Image 1" style="">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev"></a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next"></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/portfolioDetail.blade.php ENDPATH**/ ?>