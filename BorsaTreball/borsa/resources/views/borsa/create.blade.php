@extends('layouts.app')
 
 @section('content')


    <body>
    @include('header')
    @if ($errors->any())
    <div class ="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif



    <div class="contenedor-formularios">



    <!-- Contenido de los Formularios -->
        <div class="contenido-tab">

            <!-- Login -->
            <div id="Login">
                <h1>Login</h1>

                @extends('layouts.master')

                    @section('content')

                        <h2>Log In</h2>
                        
                        <form method="POST" action="/login">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
                            </div>
                            @include('partials.formerrors')
                        </form>

                    @endsection
                <p>
                <a href="{{url('borsa')}}"><u>home</u></a>
                </p>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------->
    <div class="container m-5">
        <div class="row sling-item-end">
            <div class="col-sm">
                <div class=contenedor>
                    <h3><strong>Empresa</strong><h3>
                    <a href="{{url('registreEmpre')}}"><u>Registrarse</u></a>
                    <img src="{{ asset('img/empresas-img.jpg') }}" alt="mi foto">
                </div>    
            </div> 
        </div>
    </div>
    <div class="container m-5">
        <div class="row sling-item-end">
            <div class="col-sm">
                <div class=contenedor>
                    <h3><strong>Alumne</strong><h3>
                    <a href="{{url('registreAlumne')}}"><u>Registrarse</u></a>
                    <img src="{{ asset('img/alumne.jpg') }}" alt="mi foto">
                </div>    
            </div> 
        </div>
    </div>

    @include('footer')





<style>
    .text-footer {
        display: block;
        margin-top: 100px;
        text-align: center;
        font-weight: 300;
        font-family: 'open sans';
        font-size: 20px;
    }
    
    input {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        border-top: none;
        border-left: none;
        border-right: none;
        color: #fff;
        border-radius: 0;
        transition: all 0.5s ease;
        border-radius: 5px;
    }
    
    input:focus {
        outline: none;
        border-color: #1ab188;
    }
    
    .contenedor-input {
        position: relative;
        margin-bottom: 40px;
    }
    
    .fila-arriba:after {
        content: "";
        display: table;
        clear: both;
    }
    
    .fila-arriba div {
        float: left;
        width: 48%;
        margin-right: 4%;
    }
    
    .fila-arriba div:last-child {
        margin: 0;
    }
    
    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="checkbox"] {
        width: 100%;
        height: 30px;
        margin-bottom: 16px;
        border-radius: 4px;
        font-family: 'open sans';
        box-sizing: border-box;
        font-size: 16px;
    }
    
    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        width: 100%;
        height: 50px;
        margin-top: 60px;
        border: 0px;
        background: linear-gradient(90deg, #7bd65f);
        font-weight: 300;
        cursor: pointer;
        font-size: 18px;
    }
    
    input[type="submit"]:hover {
        background: linear-gradient(90deg, #7bd65f);
    }
    
  

    
    .contenedor-formularios {
        background: rgba(19, 35, 47, 0.9);
        padding: 40px;
        max-width: 600px;
        margin: 20px auto;
        border-radius: 4px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
    
    h1,
    h3,
    p {
        text-align: center;
        color: #fff;
        font-weight: 300;
        margin: 0 0 40px;
    }
    
    label {
        position: absolute;
        transform: translateY(6px);
        left: 13px;
        color: rgba(255, 255, 255, 0.5);
        transition: all 0.25s ease;
        pointer-events: none;
        font-size: 22px;
    }
    
    label .req {
        margin: 2px;
        color: #1ab188;
    }
    
    label.active {
        transform: translateY(50px);
        left: 2px;
        font-size: 14px;
    }
    
    label.active .req {
        opacity: 0;
    }
    

    .button:hover,
    .button:focus {
        background: #179b77;
    }
    
    .button-block {
        display: block;
        width: 100%;
    }
    
    .inf {
        color: white;
    }
    
 
    
    .contenedor {
        background: rgba(19, 35, 47, 0.9);
        padding: 50px;
        max-width: 400px;
        margin: 40px auto;
        border-radius: 10px;
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
    }
</style>




@endsection
