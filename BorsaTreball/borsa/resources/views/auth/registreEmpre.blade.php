@extends('layouts.app')
 
 @section('content')


   
    @include('borsa.header')
   

    <div class="contenedor-formularios">

        <!-- Contenido de los Formularios -->
        <div class="contenido-tab">

            <!-- Registrarse -->
            <div id="registrarse">
                <h3><strong>registrar-se</strong></h3>

                <form method="POST" action="{{ route('registreEmpre') }} "  enctype="multipart/form-data">
                    @csrf 
                    <p>Dades d'acces personal <i class="bi bi-person"></i></p>
                    <div class="fila-arriba">
                        <div class="contenedor-input">

                            <label for="name">{{__('Nom')}}</label><br><br>
                            <input type="text" name="name"   class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="contenedor-input">

                            <label for="cognom">{{__('Cognom')}}</label><br><br>
                            <input type="text" name="cognom" class="form-control @error('cognom') is-invalid @enderror" id="cognom" value="{{old('cognom')}}" required autocomplete="cognom" autofocus>
                            @error('cognom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="contenedor-input">

                        <div class="contenedor-input">
                            <label>{{__('Email')}}</label><br><br>
                            <input type="email" name="email" rclass="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" equired autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="contenedor-input">
                            <label  for="password">{{__('Password') }} (8 charater primera lletra en gran i numeros)</label><br><br>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Example1234"  id="password" name="password" value="{{old('password')}}" require autocomplete="new-password" autofocus>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>

                                </span>
                            @enderror
                        </div>


                        

                        <div class="contenedor-input">
                            <label for="password_confirmation">{{__('Repetir password')}}</label><br><br>
                            <input type="password" class="form-control" id="password_confirmation"  name="password_confirmation">
                        </div>


                    </div>

                    <p>Dades de l'empresa <i class="bi bi-person-rolodex"></i></p>

                    <div class="contenedor-input">

                        <label for="empre">{{__('Nom de la empresa')}}</label><br><br>
                        <input type="text" name="empre" class="form-control @error('empre') is-invalid @enderror" id="empre" value="{{old('empre')}}" required autocomplete="empre" autofocus>
                        @error('empre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="contenedor-input">
                    <label for="telefon">telefón/mòbil<i class="bi bi-telephone"></i></label><br><br>
                        <input type="text" name="telefon" class="form-control @error('telefon') is-invalid @enderror" id="telefon" value="{{old('telefon')}}" autocomplete="telefon" autofocus>
                        @error('telefon')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }} </strong>
                            </span>
                        @enderror
                    </div>



                    <div class="contenedor-input">
                        <label for="poblacio">{{__('Població')}}</label><br><br>
                        <input type="text" name="poblacio"  class="form-control @error('poblacio') is-invalid @enderror" id="poblacio" value="{{old('poblacio')}}" required autocomplete="poblacio"  autofocus>
                        @error('poblacio')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Captcha</label>
                        <div class="col-md-6 captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button" class="btn btn-danger" class="reload" id="reload">
                            &#x21bb;
                            </button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="captcha" class="col-md-4 col-form-label text-md-right">Enter Captcha</label>
                        <div class="col-md-6">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                        </div>
                    </div>




                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn btn-success btn-block">{{__('Registrar-se')}}</button>
                    </div>

                    <br>
                 
                        <b>
                            <center>
                                <a  href="{{url('login')}}"><u>Login</u></a>
                            </center>
                        </b>
                    
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush
  




@include('estil/regi')

@endsection














