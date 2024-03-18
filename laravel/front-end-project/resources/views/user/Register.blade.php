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
      font-style:normal;
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
  <link rel="stylesheet" href={{asset('css/registerstyle.css')}}/>
  <div>
    <link href={{asset('css/registerindex.css')}} rel="stylesheet" />
    <form action="{{route('register')}}" method="post">
      @csrf
    <div class="createanaccount-container">
      <div class="createanaccount-createanaccount">
        <div class="createanaccount-frame352">
          <div class="createanaccount-createanaccount1">
            <div class="createanaccount-frame353">
              <span class="createanaccount-text">
                <span>Registrasi</span>
              </span>
            </div>
            <div class="createanaccount-haveanaccountlogin">
              <span class="createanaccount-text02">
                <span class="createanaccount-text03">
                  Sudah punya akun?
                </span>
                <a href="/signin">Masuk</a>
              </span>
            </div>
            <div class="createanaccount-textfield">
              <div class="createanaccount-frame243">
                <span class="createanaccount-text05"><span>Name</span></span>
              </div>
              <input type="text" name="name" class="createanaccount-textfield1" id="name" value="">
            </div>
            <div class="createanaccount-textfield">
              <div class="createanaccount-frame243">
                <span class="createanaccount-text05"><span>Email</span></span>
              </div>
              <input type="text" name="email" class="createanaccount-textfield1" id="email" value="">
            </div>
            <div class="createanaccount-textfield">
              <div class="createanaccount-frame243">
                <span class="createanaccount-text05"><span>Phone</span></span>
              </div>
              <input type="text" name="phone" class="createanaccount-textfield1" id="phone" value="">
            </div>
            <div class="createanaccount-frame358">
              <div class="createanaccount-textfield">
                <div class="createanaccount-frame243">
                  <span class="createanaccount-text05">
                    <span>Password</span>
                  </span>
                  {{-- <div class="createanaccount-passwordhidesee">
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
                  </div> --}}
                </div>
                <input type="password" name="password" class="createanaccount-textfield1" id="password" value="">
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
                  <div class="createanaccount-bulletpoint">
                    <img
                      src="external/ellipse1i103-cyb8-200h.png"
                      alt="Ellipse1I103"
                      class="createanaccount-ellipse1"
                    />
                    <span class="createanaccount-text17">
                      <span>Use a number (e.g. 1234)</span>
                    </span>
                  </div>
                </div>
                <div class="createanaccount-frame356">
                  <div class="createanaccount-bulletpoint">
                    <img
                      src="external/ellipse1i103-xdr-200h.png"
                      alt="Ellipse1I103"
                      class="createanaccount-ellipse1"
                    />
                    <span class="createanaccount-text17">
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
              @if (session('error'))
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              @endif
              {{-- <div class="createanaccount-frame361"></div> --}}
              {{-- <div class="createanaccount-linktext">
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
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection