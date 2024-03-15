
<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-4">
      <div class="container-fluid">
          <a class="navbar-brand pe-4" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
              </ul>
          </div>
          <div class="ml-auto d-flex align-items-center">
              <!-- Your two buttons go here -->
              <a class="nav-link me-2 pe-4" style="color: white" href="#">Button 1</a>
              <button class="btn btn-custom" style="width: 130px; height: 62px; color: white">Button 2</button>
          </div>
      </div>
  </nav>
</header>



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
