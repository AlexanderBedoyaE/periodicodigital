@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Conexion del documento con el archivo css-->
    <link rel="stylesheet" href="./css/stylesform.css">
    <!-- Conexion del documento con el google fonts, para el tipo de texto que va a ser utilizado-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;700&display=swap" rel="stylesheet">
    <!--Se establece un icono en la parte del encabezado de la pagina-->
    <link rel="icon" href="./img/news.png">
    <title>Registro</title>
</head>
<body>
    <!--Contenedor del login-->
    <div class="login-container">

        <!--se divide el contenedor del login en dos partes-->
        <!--1--><img class="image-container "src="./img/registro.png" alt="news">

        <!--2--><div class="login-info-container" >
                <h1 class="title">Regístrate</h1>

            <!--Empezamos la parte del formulario del registro-->
                <form class="form-container" action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Se define el campo del nombre con sus respectivas validaciones-->
                <input  type="text" class="form-control @error('name') is-invalid @enderror" name="name"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" placeholder="Nombre completo" value="{{ old('name') }}" required autocomplete="name" autofocus>

                <!-- En caso de que el campo del nombre no sea lleno enviara una alerta-->
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Se define el campo de la cedula con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input  type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" required="" pattern="[0-9]+" minlength="6" maxlength="11" placeholder="Cédula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus >

                <!-- Se define el campo del Sexo el cual es requerido y validado-->
                <label class="sex">Seleccione su sexo: </label>

                <select name="sexo" class="form-control @error('sexo') is-invalid @enderror" required value="{{ old('value') }}" ><br>
                    <option value="">Seleccionar...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                </select>

                <!--Se define el campo de la celular con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input  type="text" class="form-control @error('celular') is-invalid @enderror" name="celular" required="" pattern="[0-9]+" placeholder="Celular" minlength="10" maxlength="12" value="{{ old('celular') }}"  required autocomplete="celular" autofocus>

                <!--Se define el campo de la dirección con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input  type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" placeholder="Dirección" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                <!--Se define el campo del email con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required autocomplete="email">

                <!-- En caso de que el campo del email no sea lleno completamente como lo dicen las validaciones enviara una alerta-->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Se define el campo de la contraseña con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña"  minlength="4"  maxlength="8" equired autocomplete="new-password" pattern="(?=^.{4,8}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                title=" Mínimo 4 caracteres, una mayúscula y un número. Maximo 8 caracteres" required="">

                <!-- En caso de que el campo del contraseña no sea lleno completamente como lo dicen las validaciones enviara una alerta-->
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!--Se define el campo de la verificación de la contraseña con sus respectivas validaciones y el cual debe de ser requerido para el usuario-->
                <input   id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirme Contraseña" required autocomplete="new-password">

                <!--Se define un boton el cual su finalidad es registrar a la persona-->
                <button  class="btn">
                    {{ __('Registrar') }}
                </button>

                <!--Se establece el enlace para ir a la pagina de inicio de sección -->
                <p>Inicia sesión.<span class="span"><a href="{{ route('login') }}"> Click aquí</a></span></p><br>
            </form>
        </div>
    </div>
</body>
</html>
@endsection
