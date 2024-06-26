@extends('template')

@section('content')
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
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-image: url('external/loginbg.jpg');
      background-size: cover;
      background-position: center;
      height: 100vh; 
      margin-bottom: 10vh;
      margin-top: 10vh; 
    }
  </style>
  <link rel="stylesheet" href="{{asset('css/loginstyle.css')}}"/>
  <div>
    <link href="{{asset('css/loginindex.css')}}" rel="stylesheet" />
    <form action="{{route('login')}}" method="POST" id="loginForm">
      @csrf
      <div class="signupoverlay-container">
        <div class="signupoverlay-signupoverlay">
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
                    <a href="/signup"><u>Daftar</u></a>
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
                    <span class="signupoverlay-text10">
                      <span>Password</span>
                    </span>
                    <div class="signupoverlay-passwordhidesee">
                    </div>
                  </div>
                  <input type="password" name="password" class="signupoverlay-textfield1" id="password" value="">
                  <div class="password-toggle-container">
                    <input type="checkbox" id="togglePassword">
                    <label for="togglePassword">Show Password</label>
                  </div>
                </div>
              </div>
              <button class="signupoverlay-button" type="submit">
                <div class="signupoverlay-frame276">
                  <span class="signupoverlay-text18"><span>Masuk</span></span>
                </div>
              </button>
              <script>
                @if (session('error'))
                    alert("Gagal melakukan Login!");
                @endif
            </script>
            
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="{{ asset('js/validate.js') }}"></script>
  <script src="{{ asset('js/alert.js') }}"></script>
  <script>
    document.getElementById('togglePassword').addEventListener('change', function() {
      var passwordField = document.getElementById('password');
      if (this.checked) {
        passwordField.type = 'text';
      } else {
        passwordField.type = 'password';
      }
    });
  </script>
  <style>
    .password-toggle-container {
      margin-top: 16px;
      display: flex;
      align-items: center;
      color: #595959;
      
    }
    .password-toggle-container input {
      margin-right: 12px;
      transform: scale(1.6);
      margin-left: 6px; 
    }
  </style>
@endsection
