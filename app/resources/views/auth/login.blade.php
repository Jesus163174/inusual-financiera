{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
--}}
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Inusual Software -  Acceso</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="logmod">
        <div class="logmod__wrapper">
            <span class="logmod__close">Close</span>
            <div class="logmod__container">
                <ul class="logmod__tabs">
                    <li data-tabtar="lgm-2"><a href="#">Acceder</a></li>
                    <li data-tabtar="lgm-1"><a href="#">Inusual Software</a></li>
                </ul>
                <div class="logmod__tab-wrapper">
                    <div class="logmod__tab lgm-1">
                        <div class="logmod__heading">
                            <span class="logmod__heading-subtitle">Inusual Software Industries 2019</span>
                        </div>
                        <div class="logmod__form">
                            
                        </div>
                        
                    </div>
                    <div class="logmod__tab lgm-2">
                        <div class="logmod__heading">
                            <span class="logmod__heading-subtitle">Ingresa tu Correo y contraseña <strong>Para accesar</strong></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="logmod__form">
                            <form method="POST" action="{{ route('login') }}" class="simform">
                                @csrf
                                <div class="sminputs">
                                    <div class="input full">
                                        
                                        <label class="string optional" for="user-name">Correo*</label>
                                        <input class="string optional" name="email" maxlength="255" id="user-email"
                                            placeholder="Email" type="email" size="50" />
                                    </div>
                                </div>
                                <div class="sminputs">
                                    <div class="input full">
                                        <label class="string optional" for="user-pw">Contraseña *</label>
                                        <input class="string optional" maxlength="255" id="user-pw"
                                            placeholder="Password" name="password" type="password" size="50" />
                                        <span class="hide-password">Mostrar</span>
                                    </div>
                                </div>
                                <div class="simform__actions">
                                    <button class="sumbit" type="submit">Acceder</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="login.js"></script>
</body>

</html>