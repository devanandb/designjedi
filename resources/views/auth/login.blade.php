@extends('layouts.app')

@section('content')
<div class="uk-container">
<br><br><br>
    <div class="uk-flex uk-flex-center">
        <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
            <h3 class="uk-card-title">Login</h3>
                
            <form class="uk-form-stacked" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="uk-margin">
                    <label class="uk-form-label" for="email">Email</label>
                    <div class="uk-form-controls">
                        <input id="email" type="email" class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-select">Password</label>
                    <div class="uk-form-controls">
                        <input id="password" type="password{{ $errors->has('password') ? ' uk-form-danger' : '' }}" class="uk-input" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <label><input class="uk-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                    </div>
                </div>

                <div class="uk-margin">
                    <button type="submit" class="uk-button uk-button-primary">
                        Login
                    </button>
                </div>

                <hr>

                <a class="uk-button uk-button-text" href="{{ route('password.request') }}">
                    Forgot Password?
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
