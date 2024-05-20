<?php
     $navbarColor = ''; 
     $navbarColor2 = '';
    if (Request::is('/')) {
        $navbarColor = 'light';
    }else if(Request::is('portfoliodetail')) {
        $navbarColor = 'dark';
    }else {
        $navbarColor = 'light';
    }

    if (Route::currentRouteName() == '/') {
        $navbarColor2 = 'light';
    }else if(Request::is('portfoliodetail')) {
        $navbarColor2 = 'light';
    }else {
        $navbarColor2 = 'dark';
    }
?>



<?php if(session()->has('user')): ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-<?php echo e($navbarColor); ?> fixed-top p-4">
        <div class="container-fluid">
            <a class="navbar-brand pe-4" style="font-weight: 600; font-size: 22px;" href="/">Hayden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if(session()->get('user')->role == 'admin'): ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('portfolio') ? 'active' : (Request::is('portfolioadmin') ? 'active' : '')); ?>" href="/portfolioadmin">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('packagepreview') ? 'active' : (Request::is('packageadmin') ? 'active' : '')); ?>" href="/packageadmin">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('outfitcategorypreview') ? 'active' : (Request::is('outfitcategoryadmin') ? 'active' : '')); ?>" href="/outfitcategoryadmin">Busana</a>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('portfolio') ? 'active' : (Request::is('portfolioadmin') ? 'active' : '')); ?>" href="/portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('packagepreview') ? 'active' : (Request::is('packageadmin') ? 'active' : '')); ?>" href="/packagepreview">Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 <?php echo e(Request::is('outfitcategorypreview') ? 'active' : (Request::is('outfitcategoryadmin') ? 'active' : '')); ?>" href="/outfitcategorypreview">Busana</a>
                        </li>
                    </ul>
                <?php endif; ?>
          </div>
            <?php if(session()->get('user')->role == 'admin'): ?>
                <div class="ml-auto d-flex align-items-center">
                    <a href="/transactionadmin" class="btn btn-custom d-flex justify-content-center align-items-center" style="width: 214px; height: 62px; color: white; box-shadow: 0 4px 10px rgba(255,105,105, 0.4); margin-right: 36px;">
                        <span style="margin: auto; font-size: 18px; font-weight: 500">Transaksi</span>
                    </a>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo e(session()->get('user')->name); ?>

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/signout">Keluar</a></li>
                        </ul>
                    </div>
                    
                </div>
            <?php else: ?>
                <div class="ml-auto d-flex align-items-center">
                    <a href="/transaction" class="btn btn-custom d-flex justify-content-center align-items-center" style="width: 214px; height: 62px; color: white; box-shadow: 0 4px 10px rgba(255,105,105, 0.4); margin-right: 36px;">
                        <span style="margin: auto; font-size: 18px; font-weight: 500">Transaksi</span>
                    </a>   
                    <a href="/bookpage" class="btn btn-custom d-flex justify-content-center align-items-center" style="width: 214px; height: 62px; color: white; box-shadow: 0 4px 10px rgba(255,105,105, 0.4)">
                    <span style="margin: auto; font-size: 18px; font-weight: 500">Pesan Sekarang</span>
                    </a>   
                </div>
                <div class="nav-item dropdown" style="margin-left: 25px">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo e(session()->get('user')->name); ?>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="/signout">Keluar</a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </nav>
  </header>

  
<?php else: ?> 
<header>
    <nav class="navbar navbar-expand-lg navbar-<?php echo e($navbarColor); ?> fixed-top p-4">
        <div class="container-fluid">
            <a class="navbar-brand pe-4" style="font-weight: 600; font-size: 22px;" href="/">Hayden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('portfolio') ? 'active' : (Request::is('portfolioadmin') ? 'active' : '')); ?>" href="/portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-4 <?php echo e(Request::is('packagepreview') ? 'active' : (Request::is('packageadmin') ? 'active' : '')); ?>" href="/packagepreview">Package</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('outfitcategorypreview') ? 'active' : (Request::is('outfitcategoryadmin') ? 'active' : '')); ?>" href="/outfitcategorypreview">Busana</a>
                  </li>
              </ul>
          </div>
            <div class="ml-auto d-flex align-items-center">
                <a class="nav-link me-2 pe-4 text-<?php echo e($navbarColor2); ?>" href="/signup">Daftar</a>
                
                <a href="/signin" class="btn btn-custom d-flex justify-content-center align-items-center" style="width: 130px; height: 62px; color: white; box-shadow: 0 4px 10px rgba(255,105,105, 0.4)">
                  <span style="margin: auto; font-size: 18px; font-weight: 500">Masuk</span>
              </a>   
                       
            </div>
        </div>
    </nav>
  </header>
<?php endif; ?>


<script>
    const navEL = document.querySelector('.navbar'); //nampung kelas navbar ke variabel navEL

    window.addEventListener('scroll', () => {
        if(window.scrollY >= 70) {
            navEL.classList.add('navbar-scrolled')
        }else if(window.scrollY < 70) {
            navEL.classList.remove('navbar-scrolled')
        }
    })
  </script>
<?php /**PATH C:\Users\user\Downloads\Skripsi\FE\projectskripsife\laravel\front-end-project\resources\views/navbar.blade.php ENDPATH**/ ?>