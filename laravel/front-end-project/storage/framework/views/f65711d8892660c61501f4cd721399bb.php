<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-image: url('external/loginbg.jpg');
        width: 1440px;
        height: 1024px;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href="<?php echo e(asset('css/loginstyle.css')); ?>"/>
    <div>
      <link href="<?php echo e(asset('css/loginindex.css')); ?>" rel="stylesheet" />
      <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>
      <div class="signupoverlay-container">
        <div class="signupoverlay-signupoverlay">
          <img
            src="external/icons8160-jokl.svg"
            alt="Icons8160"
            class="signupoverlay-icons"
          />
          <div class="signupoverlay-frame288">
            <div class="signupoverlay-frame209">
              <img
                src="external/logo8163-lppi-200h.png"
                alt="Logo8163"
                class="signupoverlay-logo"
              />
              <div class="signupoverlay-frame8">
                <span class="signupoverlay-text"><span>Masuk</span></span>
                <div class="signupoverlay-haveanaccountlogin">
                  <span class="signupoverlay-text02">
                    <span class="signupoverlay-text03">Belum punya akun?</span>
                    <span class="signupoverlay-text04"></span>
                    <span>Daftar</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="signupoverlay-frame287">
              <div class="signupoverlay-textfield">
                <div class="signupoverlay-frame243">
                  <span class="signupoverlay-text10"><span>Email</span></span>
                </div>
                <input type="text" name="email" class="signupoverlay-textfield1" id="email" value="">
              </div>
              <div class="signupoverlay-frame286">
                <div class="signupoverlay-textfield2">
                  <div class="signupoverlay-frame2431">
                    <span class="signupoverlay-text12">
                      <span>Password</span>
                    </span>
                    <div class="signupoverlay-passwordhidesee">
                      <div class="signupoverlay-icon">
                        <div class="signupoverlay-group1">
                          <img
                            src="external/vectori817-mh3x.svg"
                            alt="VectorI817"
                            class="signupoverlay-vector"
                          />
                          <img
                            src="external/vectori817-7g9.svg"
                            alt="VectorI817"
                            class="signupoverlay-vector1"
                          />
                        </div>
                      </div>
                      <span class="signupoverlay-text14">
                        <span>Hide</span>
                      </span>
                    </div>
                  </div>
                  <input type="password" name="password" class="signupoverlay-textfield3" id="password" value="">
                </div>
                <span class="signupoverlay-text16">
                  <span>Lupa Password?</span>
                </span>
              </div>
              <button class="signupoverlay-button" type="submit">
                <div class="signupoverlay-frame276">
                  <span class="signupoverlay-text18"><span>Masuk</span></span>
                </div>
              </button>
              <?php if(session('error')): ?>
                  <div class="alert alert-danger">
                      <?php echo e(session('error')); ?>

                  </div>
              <?php endif; ?>
            </div>
          </div>
          
        </div>
      </div>
      </form>
    </div>
  </body>
</html><?php /**PATH D:\Documents\project skripsi\with git\front end\project skripsi\laravel\front-end-project\resources\views/user/Login.blade.php ENDPATH**/ ?>