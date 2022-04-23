@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Conexión del documento con el archivo css-->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Conexion del documento con el google fonts, para el tipo de texto que va a ser utilizado-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
    <!--Se establece un icono en la parte del encabezado de la pagina-->
    <link rel="icon" href="./img/news.png">
   <br><title>Inicio de sesión</title>
</head>
<body>
    <!--Contenedor del login-->
    <div class="login-container">

        <!--se divide el contenedor del login en dos partes-->
        <!--1--><div class="img-container">
            <img class="image-container" src="img/login2.png" alt="news">
            <p> Bienvenido al periódico digital. Por favor, inicie sesión.</p>
        </div>

        <!--2--><div class="login-info-container">
            <h1 class="title">Iniciar sesión</h1>

        <!--- Se realizo una modificacion en el html para que el usuario pudiese ingresar con google y facebook pero siguiendo los requeriminetos no pudimos dejarlo, osea que solo se deja comentariado
            <div class="social-login">
                <div class="social-login-element">
                    <img src="img/google.png" alt="google-icon">
                    <span>Google</span>
                </div>
                <div class="social-login-element">
                    <img src="img/facebook.png" alt="facebook-icon">
                    <span>Facebook</span>
                </div>
            </div>

            <p>- o -</p>
        -->
        <!-- Pasamos a la parte del formulario login donde se comienzan a validar a través de laravel-->
            <form class="form-container" action="{{ route('login') }}" method="POST">
                @csrf

                <!--Este input siguiente es para que reciba el email con sus validaciones correspondientes para el ingreso del usuario-->
                <input id="email" type="email" class="input" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <!-- En caso de que el campo no se llene-->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Este input siguiente es para que reciba el password o contraseña con sus validaciones correspondientes para el ingreso del usuario-->
                <input id="password" type="password" class="input" placeholder="Contraseña" name="password" required autocomplete="current-password">

                <!-- En caso de que el campo no se llene-->
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Se establece una recuperacion de contraseña por si es olvidada por el usuario-->
                <p>¿Olvidó su contraseña? <span class="span">

                    <!--Se establece la ruta que se debe de hacer para recuperarla a traves de un enlace-->
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Click aquí') }}
                    </a>
                @endif

                </span></p>

                <!--se establece un boton para el inicio de sección-->
                <button class="btn">
                    {{ __('Iniciar sesión') }}
                </button>
                <!--se establece un link para enviar al usuario a la pagina de registro-->
                <p>No tengo cuenta.<span class="span"><a href="{{ route('register') }}"> Registrarse.</a></span></p>
            </form>
        </div>
    </div>
</body>
</html>
@endsection
