@extends('layouts.header')

@section('content')
<div class="account-login">
  <div class="page-title">
    <h2>Login or Create an Account</h2>
  </div>
  <fieldset class="col2-set">
    <legend>Login or Create an Account</legend>
    <div class="col-1 new-users"><strong>New Customers</strong>
      <div class="content">
        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
        <div class="buttons-set">
          <a href="{{route('register.get')}}"><button class="button create-account" type="button">a<span>Create an Account</span></button></a>
        </div>
      </div>
    </div>
    <div class="col-2 registered-users"><strong>Registered Customers</strong>
      <div class="content">
        <p>If you have an account with us, please log in.</p>
        <form class="form-horizontal" method="POST" action="{{ route('postlogin') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       {{--  <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> --}}
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </fieldset>
</div>
@endsection
@section('footer')
  @include('layouts.footer')
@endsection