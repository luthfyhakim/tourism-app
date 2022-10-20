@extends('layouts.main')
    <!-- login -->
@section('container')
<section id="login">
   <div class="container">
      <div class="right">
        <img src="{{ asset('Assets/login/login.png') }}" alt="" />
      </div>
      <div class="login mt-5  ms-5">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
          <h1 class="fs-3">Sign In</h1>

          <div class="user-box">
            <input type="email"  type="email" name="email" :value="old('email')" required />
            <label for="email">Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required autocomplete="current-password"/>
            <label for="password">password</label>
          </div>

          <div class="d-flex justify-content-between">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input bg-transparent border-white" id="remember_me" name="remember" />
              <label class="text-white" style="font-size: 12px" for="exampleCheck1">Remember me</label>
            </div>

            <div>
                @if (Route::has('password.request'))
                <a  class="link text-white text-decoration-none" style="font-size: 12px" href="{{ route('password.request') }}">Forgot password ?</a>
            @endif
            </div>
          </div>
          <button style="width: 50%; margin-left:70px">Sign In</button>
          <label style="font-size: 12px" class="text-white text-center mt-3">Don't have account yet ?<a href="{{ route('register') }}" class="link text-decoration-none"> Sign Up</a></label>
        </form>
      </div>
    </div>
</section>
@endsection
