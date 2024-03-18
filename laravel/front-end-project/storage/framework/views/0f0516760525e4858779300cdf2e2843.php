<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Register</title>
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
        height: 1070px;
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
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href=<?php echo e(asset('css/registerstyle.css')); ?>/>
    <div>
      <link href=<?php echo e(asset('css/registerindex.css')); ?> rel="stylesheet" />
      <form action="<?php echo e(route('register')); ?>" method="post">
        <?php echo csrf_field(); ?>
      <div class="createanaccount-container">
        <div class="createanaccount-createanaccount">
          <div class="createanaccount-frame352">
            <div class="createanaccount-createanaccount1">
              <div class="createanaccount-frame353">
                <span class="createanaccount-text">
                  <span>Create an account</span>
                </span>
              </div>
              <div class="createanaccount-haveanaccountlogin">
                <span class="createanaccount-text02">
                  <span class="createanaccount-text03">
                    Already have an account?
                  </span>
                  <span>Sign in</span>
                </span>
              </div>
              <div class="createanaccount-textfield">
                <div class="createanaccount-frame243">
                  <span class="createanaccount-text05"><span>Name</span></span>
                </div>
                <input type="text" name="name" class="createanaccount-textfield1" id="name" value="">
              </div>
              <div class="createanaccount-textfield2">
                <div class="createanaccount-frame2431">
                  <span class="createanaccount-text07"><span>Email</span></span>
                </div>
                <input type="text" name="email" class="createanaccount-textfield3" id="email" value="">
              </div>
              <div class="createanaccount-textfield4">
                <span class="createanaccount-text09"><span>Phone</span></span>
                <input type="text" name="phone" class="createanaccount-textfield5" id="phone" value="">
              </div>
              <div class="createanaccount-frame358">
                <div class="createanaccount-textfield6">
                  <div class="createanaccount-frame2432">
                    <span class="createanaccount-text13">
                      <span>Password</span>
                    </span>
                    <div class="createanaccount-passwordhidesee">
                      <div class="createanaccount-icon">
                        <div class="createanaccount-group1">
                          <img
                            src="external/vectori103-bx8.svg"
                            alt="VectorI103"
                            class="createanaccount-vector"
                          />
                          <img
                            src="external/vectori103-2lr.svg"
                            alt="VectorI103"
                            class="createanaccount-vector1"
                          />
                        </div>
                      </div>
                      <span class="createanaccount-text15">
                        <span>Hide</span>
                      </span>
                    </div>
                  </div>
                  <input type="password" name="password" class="createanaccount-textfield7" id="password" value="">
                </div>
                <div class="createanaccount-frame357">
                  <div class="createanaccount-frame355">
                    <div class="createanaccount-bulletpoint">
                      <img
                        src="external/ellipse1i103-fp6p-200h.png"
                        alt="Ellipse1I103"
                        class="createanaccount-ellipse1"
                      />
                      <span class="createanaccount-text17">
                        <span>Use 8 or more characters</span>
                      </span>
                    </div>
                    <div class="createanaccount-bulletpoint1">
                      <img
                        src="external/ellipse1i103-cyb8-200h.png"
                        alt="Ellipse1I103"
                        class="createanaccount-ellipse11"
                      />
                      <span class="createanaccount-text19">
                        <span>Use a number (e.g. 1234)</span>
                      </span>
                    </div>
                  </div>
                  <div class="createanaccount-frame356">
                    <div class="createanaccount-bulletpoint2">
                      <img
                        src="external/ellipse1i103-xdr-200h.png"
                        alt="Ellipse1I103"
                        class="createanaccount-ellipse12"
                      />
                      <span class="createanaccount-text21">
                        <span>Use upper and lower case letters (e.g. Aa)</span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="createanaccount-frame360">
                <button class="createanaccount-button" type="submit">
                  <div class="createanaccount-frame276">
                    <span class="createanaccount-text23">
                      <span>Daftar</span>
                    </span>
                  </div>
                </button>
                <?php if(session('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(session('error')); ?>

                    </div>
                <?php endif; ?>
                
                <div class="createanaccount-linktext">
                  <span class="createanaccount-text25">
                    <span class="createanaccount-text26">
                      Dengan membuat akun, anda setuju dengan
                    </span>
                    <span class="createanaccount-text27">Terms of use</span>
                    <span class="createanaccount-text28"></span>
                    <span class="createanaccount-text29">dan</span>
                    <span class="createanaccount-text30"></span>
                    <span class="createanaccount-text31">Privacy Policy.</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    </div>
  </body>
</html>
<?php /**PATH /Users/aam/Desktop/Project Skripsi/FE/projectskripsife/laravel/front-end-project/resources/views/user/Register.blade.php ENDPATH**/ ?>