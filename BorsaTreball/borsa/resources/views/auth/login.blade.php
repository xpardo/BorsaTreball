@extends('layouts.app')

@section('content')
@include('borsa.header')
<div class="container">
    <div class="contenedor-formularios">
        <div class="contenido-tab">
            <!-- Login -->
            <div id="Login">
                <h1>Login</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="contenedor-input">
                            <label for="email" >{{ __('Email ') }}</label></br></br>
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                        <div class="contenedor-input">
                            <label for="password" >{{ __('Password') }}</label></br></br>

                        
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        


                        <div class="contenedor-input">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label  col-5 " for="remember">
                                    {{ __("Recorda'm") }}
                                </label>
                                
                               

                            </div>
                        </div>

                  

                        <div class="contenedor-input">
                        
                        
                            <button type="submit" class="btn btn-success">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Has oblidat la teva contrasenya?') }}
                                </a>
                            @endif
                        
                        </div>
                        <p>
                           
                            <h3> <a  href="{{url('/')}}">{{__('home')}}</a></h3>
                        </p>
                    </form>
                </div>
            </div>      
        </div>
    </div>
</div>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            

  
                        <div class="container m-5 ">
                            <div class="row sling-items-end ">
                        
                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Empresa</strong></h3>
                                            <div class="service ">
                                                <a class="nav-link btn btn-success" href="{{ route('registreEmpre') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            
                                            </div><br>
                                            <img src="{{ asset('img/empresas-img.jpg') }}" alt="registreEmpre">
                                        </div>
                                    </div>

                                    <div class="col-sm ">
                                        <div class="contenedor ">

                                            <h3><strong>Alumne</strong></h3>
                                            <div class="service ">
                                        
                                            
                                                <a class="nav-link btn btn-success" href="{{ route('registreAlumne') }} "  style="color: #fff; ">{{ __("Registra't") }}</a>
                                            </div><br>
                                            <img src="{{ asset('img/alumne.jpg') }}" alt="registreAlumne">
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
               
                    </div>
                </div>

            </div>


@include('estil/login')


@endsection

