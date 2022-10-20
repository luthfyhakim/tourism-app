@extends('layouts.main')

@section('container')
  {{-- register --}}
    <section id="login">
      <div class="container">
        <div class="login  ms-5 mt-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <h1 class="fs-3">Sign Up</h1>

            <div class="user-box">
              <input id="name" type="text"name="name" :value="old('name')" required />
              <label for="">Username</label>
            </div>
            <div class="user-box">
              <input id="email" type="email"  name="email" :value="old('email')" required />
              <label for="">Email</label>
            </div>
            <div class="user-box">
              <input id="password" type="password" name="password" required autocomplete="new-password" />
              <label for="">Password</label>
            </div>
            <div class="user-box">
              <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
              <label for="">Confirm Password</label>
            </div>
            <button>Sign Up</button>
            <label style="font-size: 12px; color: white; margin-top: 3px; text-align: center">Already have an account ?<a href="{{ route('login') }}" class="link text-decoration-none"> Sign In</a></label>
          </form>
        </div>
        <div class="right2">
          <img src="{{ asset('Assets/login/reg.png') }}" alt="" />
        </div>
      </div>
    </section>
@endsection
