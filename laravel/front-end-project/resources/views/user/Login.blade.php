<link rel="stylesheet" href="{{asset('css/login.css')}}">
<div class="content-title">
    <h3>Login to your account</h3>
</div>
<div class="form">
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" value="">
                </div>
                <div class="login">
                    <button class="btn btn-success" type="submit">Sign In</button>
                </div>
                <hr>
                {{-- <div class="register">
                    <p>Don't have an account yet?</p>
                    <a href="/signup" class="btn btn-primary">Register</a>
                </div> --}}
            </form>
        </div>
    </div>
</div>