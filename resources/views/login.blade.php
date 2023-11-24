<link href="{{ asset('assets/admin/login.css') }}" rel="stylesheet" >

<div class="wrapper">
    <div class="container">
      <div class="col-left">
        <div class="login-text">
          <h2>Welcome Back</h2>
          <p>Create your account.<br>It's totally free.</p>
          <a class="btn" href="">Sign Up</a>
        </div>
      </div>
      <div class="col-right">
        <div class="login-form">
          <h2>Login</h2>
          @if($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif
          <form action="{{ route('adminlogin') }}" method="POST">
            @csrf
            <p>
              <label>Username or email address<span>*</span></label>
              <input type="text" name="email" placeholder="Username or Email" required>
            </p>
            <p>
              <label>Password<span>*</span></label>
              <input type="password" name="password" placeholder="Password" required>
            </p>
            <p>
              <input type="submit" value="login" />
            </p>
            <p>
              <a href="{{route('home')}}">Back To Site</a>
            </p>
          </form>
        </div>
      </div>
    </div>
    <div class="credit">
      Designed by <a href="https://htmlcodex.com">HTML Codex</a>
    </div>
  </div>