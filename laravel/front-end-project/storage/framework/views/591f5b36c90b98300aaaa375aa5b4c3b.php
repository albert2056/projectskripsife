<?php
     $navbarColor = ''; 
     $navbarColor2 = '';
    if (Route::currentRouteName() == 'home') {
        $navbarColor = 'dark';
    } else {
        $navbarColor = 'light';
    }

    if (Route::currentRouteName() == 'home') {
        $navbarColor2 = 'light';
    } else {
        $navbarColor2 = 'dark';
    }
?>

<?php if(session()->has('user')): ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-<?php echo e($navbarColor); ?> fixed-top p-4">
        <div class="container-fluid">
            <a class="navbar-brand pe-4" href="/">Hayden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Portfolio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('packagechoose') ? 'active' : ''); ?>" href="/packagechoose">Package</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('outfitchoose') ? 'active' : ''); ?>" href="/outfitchoose">Busana</a>
                  </li>
              </ul>
          </div>
            <div class="ml-auto d-flex align-items-center">
                
                
                <a href="/bookpage" class="btn btn-custom d-flex justify-content-center align-items-center" style="width: 214px; height: 62px; color: white; box-shadow: 0 4px 10px rgba(255,105,105, 0.4)">
                  <span style="margin: auto; font-size: 18px; font-weight: 500">Pesan Sekarang</span>
              </a>            
            </div>
        </div>
    </nav>
  </header>
<?php else: ?> 
<header>
    <nav class="navbar navbar-expand-lg navbar-<?php echo e($navbarColor); ?> fixed-top p-4">
        <div class="container-fluid">
            <a class="navbar-brand pe-4" href="/">Hayden</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/">Portfolio</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('packagechoose') ? 'active' : ''); ?>" href="/packagechoose">Package</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 <?php echo e(Request::is('outfitchoose') ? 'active' : ''); ?>" href="/outfitchoose">Busana</a>
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
        if(window.scrollY >= 56) {
            navEL.classList.add('navbar-scrolled')
        }else if(window.scrollY < 56) {
            navEL.classList.remove('navbar-scrolled')
        }
    })
  </script>
<?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/navbar.blade.php ENDPATH**/ ?>