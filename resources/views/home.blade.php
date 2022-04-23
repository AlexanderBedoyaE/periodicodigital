@extends('layouts.app')
<!-- Seccion establecida para la bienvenida del usuario en el login-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido Usuario') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Has iniciado sesion con exito!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
