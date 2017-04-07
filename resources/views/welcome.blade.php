@extends('templates.login')


@section('title' , 'Home')
@section('header')
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('body')
    <div class="row classroom">
        <div class="col m12 l12 s12">

            <div class="card col s12 m6 l6 push-m6 push-l6 frame">
                
                <div class="card-title">
                    <br>
                    <div class="center col m10 l10 s12 push-l1 push-m1">
                        <img src="images/system/book-open-flat.png" alt="book" class="mm-img">
                        <h4 class="center">Iniciar sessión</h4>
                        <p>Ingrese sus datos para iniciar sessión</p>
                    </div>
                    
                </div>
                {!! Form::open(['url' => '/home' , 'method' => 'POST']) !!}
                    
                    <div class="col s12 m10 l10 push-m1 push-l1">

                        <div class="input-field">
                            {!! Form::text('username','12345',['class' => 'validate']); !!}
                            <label for="username">Ingrese el código de usuario</label>
                        </div>

                        <div class="input-field">
                            {!! Form::password('password', ['class' => 'validate']); !!}

                            <label for="password">Ingrese la contraseña del usuario</label>
                        </div>
                        

                        <div class="card-action">
                            <button class="btn waves-effect waves-light red accent-3 center" type="submit" name="action">
                                Entrar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>

                    </div>
                {!! Form::close() !!}

            </div>

        </div>
    </div>
@endsection

